<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

?>
<?php astra_content_bottom(); ?>
</div> <!-- ast-container -->
</div><!-- #content -->
<?php
astra_content_after();

astra_footer_before();

astra_footer();

astra_footer_after();
?>

</div><!-- #page -->
<?php
astra_body_bottom();
wp_footer();
?>
<div id="cookies">
    <div>
        <div class="close-btn" id="cookies_close"><img src="/wp-content/uploads/2022/03/Icon-ionic-ios-close-circle-outline.png"></div>
        <span id="cookies_powiadomienie">Ta strona korzysta z plików cookies aby świadczyć usługi na najwyższym
            poziomie.</span>
        <span> <a id="cookies_polityka" href="/wordpress/polityka-prywatnosci/">Dowiedz się więcej</a></span>

        <span><a id="okbutton" href="javascript:cookies_create_cookie('cookies',1,7);">akceptuję</a></span>

    </div>
</div>
<script type=" text/javascript">
    var galTable = new Array();
    var galx = 0;
</script>
<script type="text/javascript">
    function cookies_create_cookie(name, value, days) {
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            var expires = "; expires=" + date.toGMTString();
        } else var expires = "";
        document.cookie = name + "=" + value + expires + "; path=/";
        document.getElementById("cookies").style.display = "none";
    }

    function cookies_read_cookie(name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(";");
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == " ") c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    }
    var cookies_jest = cookies_read_cookie("cookies");
    if (cookies_jest == 1) {
        document.getElementById("cookies").style.display = "none";
    }
</script>

</body>

</html>