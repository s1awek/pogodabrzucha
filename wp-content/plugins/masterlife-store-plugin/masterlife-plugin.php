<?php
/**
 * @link              masterlifecrm.com
 * @since             1.0.0
 * @package           masterlife_plugin
 *
 * @wordpress-plugin
 * Plugin Name:       Nowy Formularz MasterLife
 * Plugin URI:        masterlifecrm.com/
 * Description:       Formularz zamawiania MasterLife
 * Version:           3.0.1
 * Author:            MasterlifeCrm
 * Author URI:        masterlifecrm.com/
 * Text Domain:       masterlife-plugin
 * Domain Path:       /languages
 */

function get_site_assets ($Url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $Url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

add_action('init', function () {
  $my_page = get_option('masterlife_plugin_page');
  if (!$my_page || FALSE === get_post_status($my_page)) {
    $my_new_page = array(
      'post_title' => 'Zamówienie',
      'post_content' => '',
      'post_status' => 'publish',
      'post_type' => 'page'
    );
    $my_page = wp_insert_post($my_new_page);
    update_option('masterlife_plugin_page', $my_page);
  }
});

add_action('template_include', function ($template) {
  $my_page = get_option('masterlife_plugin_page');
  $file_name = 'masterlife-plugin-page-template.php';
  if ($my_page && is_page($my_page)) {
    if (locate_template($file_name)) {
      $template = locate_template($file_name);
    } else {
      $template = plugin_dir_path(__FILE__) . $file_name;
    }
  }
  return $template;
});

add_action('init', function () {
  add_filter('script_loader_tag', function ($tag, $handle) {
    if (!preg_match('/^masterlife-/', $handle)) {
      return $tag;
    }
    return str_replace(' src', ' async defer src', $tag);
  }, 10, 2);

  add_filter('style_loader_tag', function ($tag, $handle) {
    $my_page = get_option('masterlife_plugin_page');
    if ($my_page && is_page($my_page)) {
      if (preg_match('/^masterlife/', $handle)) {
        return $tag;
      }
      return false;
    } else {
      return $tag;
    }
  }, 10, 3);

  add_action('wp_enqueue_scripts', function () {
    $my_page = get_option('masterlife_plugin_page');
        if (!function_exists('curl_init')){
             $asset_manifest = json_decode(file_get_contents('https://static.dietly.pl/form/asset-manifest.json'), true)['files'];
        } else {
             $asset_manifest = json_decode(get_site_assets('https://static.dietly.pl/form/asset-manifest.json'), true)['files'];
        }

    if ($my_page && is_page($my_page)) {
      if (isset($asset_manifest['main.css'])) {
        wp_enqueue_style('masterlife', $asset_manifest['main.css']);
      }

      wp_enqueue_script('masterlife-runtime', $asset_manifest['runtime-main.js'], array(), null, true);

      wp_enqueue_script('masterlife-main', $asset_manifest['main.js'], array('masterlife-runtime'), null, true);

      foreach ($asset_manifest as $key => $value) {
        if (preg_match('@static/js/(.*)\.chunk\.js@', $key, $matches)) {
          if ($matches && is_array($matches) && count($matches) === 2) {
            $name = "masterlife-" . preg_replace('/[^A-Za-z0-9_]/', '-', $matches[1]);
            wp_enqueue_script($name, $value, array('masterlife-main'), null, true);
          }
        }

        if (preg_match('@static/css/(.*)\.chunk\.css@', $key, $matches)) {
          if ($matches && is_array($matches) && count($matches) == 2) {
            $name = "masterlife-" . preg_replace('/[^A-Za-z0-9_]/', '-', $matches[1]);
            wp_enqueue_style($name, $value, array('masterlife'), null);
          }
        }
      }
    }
  }, 1, 20);
});
