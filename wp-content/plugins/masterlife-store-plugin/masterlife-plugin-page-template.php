<?php /* Template Name: Example Template */ ?>      
<DOCTYPE html>      
<html <?php language_attributes(); ?>>      
<head>      
<script>      
function loadCSS( href, before, media ){      
var ss = window.document.createElement( "link" );      
var ref = before || window.document.getElementsByTagName( "script" )[ 0 ];      
ss.rel = "stylesheet";      
ss.href = href;      
ss.media = "only x";      
ref.parentNode.insertBefore( ss, ref );      
setTimeout( function(){      
ss.media = media || "all";      
} );      
return ss;      
}      
</script>      
<script>      
window.sessionStorage.setItem('company-id', 'wieszcojesz')      
window.sessionStorage.setItem('server-url', 'https://panel.dietly.pl')      
</script>      
<meta charset="<?php bloginfo('charset'); ?>">      
<meta http-equiv="X-UA-Compatible" content="IE=edge">      
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">      
<meta name="mobile-web-app-capable" content="yes">      
<meta name="apple-mobile-web-app-capable" content="yes">      
<meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">      
<link rel="profile" href="http://gmpg.org/xfn/11">      
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">      
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"      
integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt"      
crossorigin="anonymous">      
<?php wp_head(); ?>      
</head>      
<body <?php body_class(); ?>>      
<input id="home_url" type="hidden" value="<?php echo get_home_url(); ?>"/>      
<div id="root"></div>      
<div style="opacity: 0; height: 0; overflow: hidden;">      
<?php wp_footer(); ?>      
</div>      
</body>      
</html>      
