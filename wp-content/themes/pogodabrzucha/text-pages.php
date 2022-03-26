<?php
/**
 * Template name: Text content
 * @package WordPress
 * @subpackage astra
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header();?>

<div class="text-content">
    <?php the_content();?>

</div>
<?php get_footer();?>