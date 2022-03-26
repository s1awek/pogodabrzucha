<?php
/**
 * Template name: Landing page

 * @package WordPress
 * @subpackage astra
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header();

?>

<section class="landing-banner">
	<div class="background">
                <div class="banner-content">
                    <img src="/wp-content/uploads/2022/03/Component-42-–-1.png" alt="">
                    <div class="banner-content-texts">
                        <h2>Dziękujemy</h2>
                        <p>Zaufałeś nam i wybrałeś Wiesz Co Jesz. Pora na coś nowego
                        i jeeeeszcze lepszego :)<br><br>
                        Zadowolenie i dobre samopoczucie naszych klientów jest dla nas priorytetem. To główny z powodów dla których powstała Pogoda Brzucha! Czyli marka ze sprawdzonym cateringiem dietetycznym!
                        </p>
                    </div>
                </div>
            </div>
</section>


<section class="landing-cta">
	<div class="contact-clouds">
                <img src="/wp-content/uploads/2022/03/contactform-left.png" alt="">
                <img src="/wp-content/uploads/2022/03/contact.png" alt="">
                <img src="/wp-content/uploads/2022/03/chmurka-ciemna-contact.png" alt="">
                <img src="/wp-content/uploads/2022/03/chmurka-button-gorna-1.png" alt="">
                <img src="/wp-content/uploads/2022/03/chmurka-button-dolna.png" alt="">
            </div>
	<h2>Poznajmy się!</h2>
            <p>Zapisz się do newslettera i odbierz...</p>
            <img src="/wp-content/uploads/2022/03/cta_rabat.png" alt="promocja">
            <p>...na pierwsze zamówienie!<br>Klik i gotowe.</p>
            <div class="landing-contact-form">
                
				<?php echo do_shortcode('[contact-form-7 id="689" title="Landing Page contact form"]'); ?>
				
            </div>
</section>


<section class="landing-graphic">
	<div class="yellow-clouds">    
                <img class="left-yellow-cloud" src="/wp-content/uploads/2022/03/chmurka-jasna-duza.png">
                <img class="right-yellow-cloud" src="/wp-content/uploads/2022/03/chmurka-jasna-mala.png">
            </div>
            <div class="landing-graphic-content">
                <h2>Tak też możemy</h2>
                <img src="/wp-content/uploads/2022/03/tak-tez-mozemy.png" alt="">
            </div>
</section>



<section class="landing-features">
	<div class="landing-features-title">
                <h2>Co zyskuję?</h2>
            </div>
            <div class="landing-features-container">
                <div class="feature">
                    <img src="/wp-content/uploads/2022/03/icon1.png">
                    <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
                </div>
                <div class="feature">
                    <img src="/wp-content/uploads/2022/03/icon2.png">
                    <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
                </div>
                <div class="feature">
                    <img src="/wp-content/uploads/2022/03/icon3.png">
                    <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
                </div>
                <div class="feature">
                    <img src="/wp-content/uploads/2022/03/icon4.png">
                    <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
                </div>
            </div>
</section>

<?php get_footer();?>