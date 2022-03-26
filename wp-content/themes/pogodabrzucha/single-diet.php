<?php
/**
 * Template name: Single diet
 * @package WordPress
 * @subpackage astra
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header();?>

<section classs="diet-banner">
    <div class="diet-banner-banner review-web-view ">

        <?php
$dietFirstImg = get_field('slider_diet_image');
if (!empty($dietFirstImg)): ?>
        <img class="diet-img" src="<?php echo esc_url($dietFirstImg['url']); ?>"
            alt="<?php echo esc_attr($dietFirstImg['alt']); ?>" />
        <?php endif;?>



        <h2 class="diet-banner-header"><?php the_field('name_diet')?></h2>
        <p class="diet-banner-price">od <?php the_field('kcal_v1_price')?> zł</p>

        <p class="diet-banner-kcal">
            <?php the_field('kcal_v1');?> / <?php the_field('kcal_v2');?> / <?php the_field('kcal_v3');?> kCal
        </p>
        <p class="diet-banner-desc"><?php the_field('slider_description')?></p>
        <div class="diet-banner-buttons"><a class="white-button border-button border-button--white fill-button "
                href="#">zobacz
                menu</a><a class="gold-button border-button border-button--solid" href="#">zamow</a></div>
        <div class="diet-banner-icon-row">
            <div class="diet-banner-icon-item"><img src="/wp-content/uploads/2022/03/protein.png">
                <p>Białko</p>
            </div>
            <div class="diet-banner-icon-item"><img src="/wp-content/uploads/2022/03/fat.png">
                <p>Tłuszcze</p>
            </div>
            <div class="diet-banner-icon-item"><img src="/wp-content/uploads/2022/03/carbon.png">
                <p>Węglowodany</p>
            </div>
        </div>

    </div>

    </div>
    <div class="diet-banner-banner review-mobile-view">


        <div class="diet-banner-banner__mobile-desc">
            <?php
$dietFirstImgM = get_field('slider_image_mobile');
if (!empty($dietFirstImgM)): ?>
            <img class="diet-img" src="<?php echo esc_url($dietFirstImgM['url']); ?>"
                alt="<?php echo esc_attr($dietFirstImgM['alt']); ?>" />
            <?php endif;?>
            <img class="decoration decoration-mbaner" src="/wp-content/uploads/2022/03/chmurka-duza-slider.png">
            <p class="diet-banner-price gold-button border-button ">od
                <?php the_field('kcal_v1_price')?> zł</p>
            <h2 class="diet-banner-header"><?php the_field('name_diet')?></h2>
            <p class="diet-banner-kcal">
                <?php the_field('kcal_v1');?> / <?php the_field('kcal_v2');?> / <?php the_field('kcal_v3');?> kCal
            </p>
            <p class="diet-banner-desc"><?php the_field('slider_description')?></p>
            <div class="diet-banner-buttons"><a class="white-button border-button border-button--white fill-button "
                    href="#">zobacz
                    menu</a><a class="gold-button border-button border-button--solid" href="#">zamow</a></div>

        </div>

        <div class="diet-banner-icon-row">
            <div class="diet-banner-icon-item"><img src="/wp-content/uploads/2022/03/protein.png">
                <p>Białko</p>
            </div>
            <div class="diet-banner-icon-item"><img src="/wp-content/uploads/2022/03/fat.png">
                <p>Tłuszcze</p>
            </div>
            <div class="diet-banner-icon-item"><img src="/wp-content/uploads/2022/03/carbon.png">
                <p>Węglowodany</p>
            </div>
        </div>

    </div>


</section>
<section class="diet-description">
    <div class="diet-description__general diet-description__div">

        <div class="half-flex">
            <h2><?php the_field('header_for_whom');?></h2>

        </div>
        <div class="half-flex">
            <p><?php the_field('desc_first_section');?></p>
        </div>

    </div>
    <!-- first section -->
    <div class="diet-description__first diet-description__div">
        <div class="diet-description__img-box web-view">
            <?php
$dietFirstImg = get_field('image_first_section');
if (!empty($dietFirstImg)): ?>
            <img src="<?php echo esc_url($dietFirstImg['url']); ?>"
                alt="<?php echo esc_attr($dietFirstImg['alt']); ?>" />
            <?php endif;?>
        </div>
        <div class="diet-description__img-box mobile-view">
            <?php
$dietFirstImgM = get_field('image_first_section_mobile');
if (!empty($dietFirstImgM)): ?>
            <img src="<?php echo esc_url($dietFirstImgM['url']); ?>"
                alt="<?php echo esc_attr($dietFirstImgM['alt']); ?>" />
            <?php endif;?>
        </div>
        <div class="diet-description__img-txt">
            <h2><?php the_field('txt_first_section');?></h2>
            <p><?php the_field('desc_first_section');?></h2>
        </div>


    </div>
    <!-- second section -->
    <div class="diet-description__second diet-description__div">
        <div class="diet-description__img-txt">
            <h2><?php the_field('txt_second_section');?></h2>
            <p><?php the_field('desc_second_section');?></h2>
        </div>
        <div class="diet-description__img-box web-view">
            <?php
$dietSecImg = get_field('image_second_section');
if (!empty($dietFirstImg)): ?>
            <img src="<?php echo esc_url($dietSecImg['url']); ?>" alt="<?php echo esc_attr($dietSecImg['alt']); ?>" />
            <?php endif;?>
        </div>
        <div class="diet-description__img-box mobile-view">
            <?php
$dietSecImgM = get_field('image_second_section_mobile');
if (!empty($dietSecImgM)): ?>
            <img src="<?php echo esc_url($dietSecImgM['url']); ?>" alt="<?php echo esc_attr($dietSecImgM['alt']); ?>" />
            <?php endif;?>
        </div>
    </div>
    <!-- image third section -->
    <div class="diet-description__third diet-description__div">
        <div class="diet-description__img-box web-view">
            <?php
$dietThreeImg = get_field('image_third_section');
if (!empty($dietFirstImg)): ?>
            <img src="<?php echo esc_url($dietThreeImg['url']); ?>"
                alt="<?php echo esc_attr($dietThreeImg['alt']); ?>" />
            <?php endif;?>
        </div>
        <div class="diet-description__img-box mobile-view">
            <?php
$dietThreeImgM = get_field('image_third_section_mobile');
if (!empty($dietThreeImgM)): ?>
            <img src="<?php echo esc_url($dietThreeImgM['url']); ?>"
                alt="<?php echo esc_attr($dietThreeImgM['alt']); ?>" />
            <?php endif;?>
        </div>
        <div class="diet-description__img-txt">

            <h2><?php the_field('txt_third_section');?></h2>

            <p><?php the_field('desc_third_section');?></h2>
        </div>
    </div>
</section>
<section class="menu-diet">
    <div class="menu-diet__header">

        <h2><?php the_field('menu_header');?></h2>

        <p><?php the_field('menu_date');?></p>
        <img class="decoration decorationM1" src="/wp-content/uploads/2022/03/menu-left.png">
        <img class="decoration decorationM2" src="/wp-content/uploads/2022/03/menu-rigt.png">

    </div>

    <!-- Control buttons -->
    <div id="weekDays" class="weekDiets">
        <a class="to-filtre border-button border-button--gold web-view fill-button--brown-trans active"
            onclick="filterSelection('poniedzialek')">
            Poniedziałek</a>
        <a class="to-filtre border-button border-button--gold fill-button--brown-trans web-view"
            onclick="filterSelection('wtorek')">
            Wtorek</a>
        <a class="to-filtre border-button border-button--gold fill-button--brown-trans web-view"
            onclick="filterSelection('sroda')"> Środa</a>
        <a class="to-filtre border-button border-button--gold fill-button--brown-trans web-view"
            onclick="filterSelection('czwartek')">
            Czwartek</a>
        <a class="to-filtre border-button border-button--gold fill-button--brown-trans web-view"
            onclick="filterSelection('piatek')"> Piątek</a>
        <a class="to-filtre border-button border-button--gold fill-button--brown-trans web-view"
            onclick="filterSelection('sobota')"> Sobota</a>
        <a class="to-filtre border-button border-button--gold fill-button--brown-trans web-view"
            onclick="filterSelection('niedziela')">
            Niedziela</a>
        <a class="to-filtreM mobile-view border-button border-button--gold fill-button--brown-trans active-m"
            onclick="filterSelection('poniedzialek')"> Pon</a>
        <a class="to-filtreM border-button border-button--gold  fill-button--brown-trans mobile-view"
            onclick="filterSelection('wtorek')"> Wt</a>
        <a class="to-filtreM border-button border-button--gold  fill-button--brown-trans mobile-view"
            onclick="filterSelection('sroda')"> Śr</a>
        <a class="to-filtreM border-button border-button--gold  fill-button--brown-trans mobile-view"
            onclick="filterSelection('czwartek')"> Czw</a>
        <a class="to-filtreM border-button border-button--gold  fill-button--brown-trans mobile-view"
            onclick="filterSelection('piatek')"> Pt</a>
        <a class="to-filtreM border-button border-button--gold  fill-button--brown-trans mobile-view"
            onclick="filterSelection('sobota')"> Sob</a>
        <a class="to-filtreM border-button border-button--gold  fill-button--brown-trans mobile-view"
            onclick="filterSelection('niedziela')"> Nd</a>
    </div>
    <div class="container">
        <!-- poniedziałek -->
        <div class="filterDiv poniedzialek">
            <div class="menu-grid">
                <!-- śniadanie -->
                <div class="menu-grid__meal-box">
                    <div class="menu-grid__meal-image">
                        <img src="/wp-content/uploads/2022/03/brekfest.png">
                    </div>
                    <div class="menu-grid__meal-desc">
                        <div class="menu-grid__meal-desc--name">
                            <h4> Śniadanie </h4>
                        </div>
                        <div class="menu-grid__meal-desc--txt">
                            <p><?php the_field('monday_breakfest');?></p>
                        </div>
                    </div>
                </div>
                <!-- obiad -->
                <div class="menu-grid__meal-box">
                    <div class="menu-grid__meal-image">
                        <img src="/wp-content/uploads/2022/03/dinner.png">
                    </div>
                    <div class="menu-grid__meal-desc">
                        <div class="menu-grid__meal-desc--name">
                            <h4> Obiad </h4>
                        </div>
                        <div class="menu-grid__meal-desc--txt">
                            <p><?php the_field('monday_dinner');?></p>
                        </div>
                    </div>
                </div>
                <!-- kolacja -->
                <div class="menu-grid__meal-box">
                    <div class="menu-grid__meal-image">
                        <img src="/wp-content/uploads/2022/03/supper.png">
                    </div>
                    <div class="menu-grid__meal-desc">
                        <div class="menu-grid__meal-desc--name">
                            <h4> Kolacja </h4>
                        </div>
                        <div class="menu-grid__meal-desc--txt">
                            <p><?php the_field('monday_supper');?></p>
                        </div>
                    </div>
                </div>
                <!-- drugie śniadanie -->
                <div class="menu-grid__meal-box">
                    <div class="menu-grid__meal-image">
                        <img src="/wp-content/uploads/2022/03/brekfest2.png">
                    </div>
                    <div class="menu-grid__meal-desc">
                        <div class="menu-grid__meal-desc--name">
                            <h4> Drugie śniadanie </h4>
                        </div>
                        <div class="menu-grid__meal-desc--txt">
                            <p><?php the_field('monday_second');?></p>
                        </div>
                    </div>
                </div>
                <!-- podwieczorek -->
                <div class="menu-grid__meal-box">
                    <div class="menu-grid__meal-image">
                        <img src="/wp-content/uploads/2022/03/tea.png">
                    </div>
                    <div class="menu-grid__meal-desc">
                        <div class="menu-grid__meal-desc--name">
                            <h4> Podwieczorek </h4>
                        </div>
                        <div class="menu-grid__meal-desc--txt">
                            <p><?php the_field('monday_tea');?></p>
                        </div>
                    </div>
                </div>


            </div>


        </div>

        <!-- wtorek -->
        <div class="filterDiv wtorek">
            <div class="menu-grid">
                <!-- śniadanie -->
                <div class="menu-grid__meal-box">
                    <div class="menu-grid__meal-image">
                        <img src="/wp-content/uploads/2022/03/brekfest.png">
                    </div>
                    <div class="menu-grid__meal-desc">
                        <div class="menu-grid__meal-desc--name">
                            <h4> Śniadanie </h4>
                        </div>
                        <div class="menu-grid__meal-desc--txt">
                            <p><?php the_field('tuesday_breakfest');?></p>
                        </div>
                    </div>
                </div>
                <!-- obiad -->
                <div class="menu-grid__meal-box">
                    <div class="menu-grid__meal-image">
                        <img src="/wp-content/uploads/2022/03/dinner.png">
                    </div>
                    <div class="menu-grid__meal-desc">
                        <div class="menu-grid__meal-desc--name">
                            <h4> Obiad </h4>
                        </div>
                        <div class="menu-grid__meal-desc--txt">
                            <p><?php the_field('tuesday_dinner');?></p>
                        </div>
                    </div>
                </div>
                <!-- kolacja -->
                <div class="menu-grid__meal-box">
                    <div class="menu-grid__meal-image">
                        <img src="/wp-content/uploads/2022/03/supper.png">
                    </div>
                    <div class="menu-grid__meal-desc">
                        <div class="menu-grid__meal-desc--name">
                            <h4> Kolacja </h4>
                        </div>
                        <div class="menu-grid__meal-desc--txt">
                            <p><?php the_field('tuesday_supper');?></p>
                        </div>
                    </div>
                </div>
                <!-- drugie śniadanie -->
                <div class="menu-grid__meal-box">
                    <div class="menu-grid__meal-image">
                        <img src="/wp-content/uploads/2022/03/brekfest2.png">
                    </div>
                    <div class="menu-grid__meal-desc">
                        <div class="menu-grid__meal-desc--name">
                            <h4> Drugie śniadanie </h4>
                        </div>
                        <div class="menu-grid__meal-desc--txt">
                            <p><?php the_field('tuesday_second');?></p>
                        </div>
                    </div>
                </div>
                <!-- podwieczorek -->
                <div class="menu-grid__meal-box">
                    <div class="menu-grid__meal-image">
                        <img src="/wp-content/uploads/2022/03/tea.png">
                    </div>
                    <div class="menu-grid__meal-desc">
                        <div class="menu-grid__meal-desc--name">
                            <h4> Podwieczorek </h4>
                        </div>
                        <div class="menu-grid__meal-desc--txt">
                            <p><?php the_field('tuesday_tea');?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- środa -->
        <div class="filterDiv sroda">
            <div class="menu-grid">
                <!-- śniadanie -->
                <div class="menu-grid__meal-box">
                    <div class="menu-grid__meal-image">
                        <img src="/wp-content/uploads/2022/03/brekfest.png">
                    </div>
                    <div class="menu-grid__meal-desc">
                        <div class="menu-grid__meal-desc--name">
                            <h4> Śniadanie </h4>
                        </div>
                        <div class="menu-grid__meal-desc--txt">
                            <p><?php the_field('wednesday_breakfest');?></p>
                        </div>
                    </div>
                </div>
                <!-- obiad -->
                <div class="menu-grid__meal-box">
                    <div class="menu-grid__meal-image">
                        <img src="/wp-content/uploads/2022/03/dinner.png">
                    </div>
                    <div class="menu-grid__meal-desc">
                        <div class="menu-grid__meal-desc--name">
                            <h4> Obiad </h4>
                        </div>
                        <div class="menu-grid__meal-desc--txt">
                            <p><?php the_field('wednesday_dinner');?></p>
                        </div>
                    </div>
                </div>
                <!-- kolacja -->
                <div class="menu-grid__meal-box">
                    <div class="menu-grid__meal-image">
                        <img src="/wp-content/uploads/2022/03/supper.png">
                    </div>
                    <div class="menu-grid__meal-desc">
                        <div class="menu-grid__meal-desc--name">
                            <h4> Kolacja </h4>
                        </div>
                        <div class="menu-grid__meal-desc--txt">
                            <p><?php the_field('wednesday_supper');?></p>
                        </div>
                    </div>
                </div>
                <!-- drugie śniadanie -->
                <div class="menu-grid__meal-box">
                    <div class="menu-grid__meal-image">
                        <img src="/wp-content/uploads/2022/03/brekfest2.png">
                    </div>
                    <div class="menu-grid__meal-desc">
                        <div class="menu-grid__meal-desc--name">
                            <h4> Drugie śniadanie </h4>
                        </div>
                        <div class="menu-grid__meal-desc--txt">
                            <p><?php the_field('wednesday_second');?></p>
                        </div>
                    </div>
                </div>
                <!-- podwieczorek -->
                <div class="menu-grid__meal-box">
                    <div class="menu-grid__meal-image">
                        <img src="/wp-content/uploads/2022/03/tea.png">
                    </div>
                    <div class="menu-grid__meal-desc">
                        <div class="menu-grid__meal-desc--name">
                            <h4> Podwieczorek </h4>
                        </div>
                        <div class="menu-grid__meal-desc--txt">
                            <p><?php the_field('wednesday_tea');?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- czwartek -->
        <div class="filterDiv czwartek">
            <div class="menu-grid">
                <!-- śniadanie -->
                <div class="menu-grid__meal-box">
                    <div class="menu-grid__meal-image">
                        <img src="/wp-content/uploads/2022/03/brekfest.png">
                    </div>
                    <div class="menu-grid__meal-desc">
                        <div class="menu-grid__meal-desc--name">
                            <h4> Śniadanie </h4>
                        </div>
                        <div class="menu-grid__meal-desc--txt">
                            <p><?php the_field('thursday_breakfest');?></p>
                        </div>
                    </div>
                </div>
                <!-- obiad -->
                <div class="menu-grid__meal-box">
                    <div class="menu-grid__meal-image">
                        <img src="/wp-content/uploads/2022/03/dinner.png">
                    </div>
                    <div class="menu-grid__meal-desc">
                        <div class="menu-grid__meal-desc--name">
                            <h4> Obiad </h4>
                        </div>
                        <div class="menu-grid__meal-desc--txt">
                            <p><?php the_field('thursday_dinner');?></p>
                        </div>
                    </div>
                </div>
                <!-- kolacja -->
                <div class="menu-grid__meal-box">
                    <div class="menu-grid__meal-image">
                        <img src="/wp-content/uploads/2022/03/supper.png">
                    </div>
                    <div class="menu-grid__meal-desc">
                        <div class="menu-grid__meal-desc--name">
                            <h4> Kolacja </h4>
                        </div>
                        <div class="menu-grid__meal-desc--txt">
                            <p><?php the_field('thursday_supper');?></p>
                        </div>
                    </div>
                </div>
                <!-- drugie śniadanie -->
                <div class="menu-grid__meal-box">
                    <div class="menu-grid__meal-image">
                        <img src="/wp-content/uploads/2022/03/brekfest2.png">
                    </div>
                    <div class="menu-grid__meal-desc">
                        <div class="menu-grid__meal-desc--name">
                            <h4> Drugie śniadanie </h4>
                        </div>
                        <div class="menu-grid__meal-desc--txt">
                            <p><?php the_field('thursday_second');?></p>
                        </div>
                    </div>
                </div>
                <!-- podwieczorek -->
                <div class="menu-grid__meal-box">
                    <div class="menu-grid__meal-image">
                        <img src="/wp-content/uploads/2022/03/tea.png">
                    </div>
                    <div class="menu-grid__meal-desc">
                        <div class="menu-grid__meal-desc--name">
                            <h4> Podwieczorek </h4>
                        </div>
                        <div class="menu-grid__meal-desc--txt">
                            <p><?php the_field('thursday_tea');?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- piątek -->
        <div class="filterDiv piatek">
            <div class="menu-grid">
                <!-- śniadanie -->
                <div class="menu-grid__meal-box">
                    <div class="menu-grid__meal-image">
                        <img src="/wp-content/uploads/2022/03/brekfest.png">
                    </div>
                    <div class="menu-grid__meal-desc">
                        <div class="menu-grid__meal-desc--name">
                            <h4> Śniadanie </h4>
                        </div>
                        <div class="menu-grid__meal-desc--txt">
                            <p><?php the_field('friday_breakfest');?></p>
                        </div>
                    </div>
                </div>
                <!-- obiad -->
                <div class="menu-grid__meal-box">
                    <div class="menu-grid__meal-image">
                        <img src="/wp-content/uploads/2022/03/dinner.png">
                    </div>
                    <div class="menu-grid__meal-desc">
                        <div class="menu-grid__meal-desc--name">
                            <h4> Obiad </h4>
                        </div>
                        <div class="menu-grid__meal-desc--txt">
                            <p><?php the_field('friday_dinner');?></p>
                        </div>
                    </div>
                </div>
                <!-- kolacja -->
                <div class="menu-grid__meal-box">
                    <div class="menu-grid__meal-image">
                        <img src="/wp-content/uploads/2022/03/supper.png">
                    </div>
                    <div class="menu-grid__meal-desc">
                        <div class="menu-grid__meal-desc--name">
                            <h4> Kolacja </h4>
                        </div>
                        <div class="menu-grid__meal-desc--txt">
                            <p><?php the_field('friday_supper');?></p>
                        </div>
                    </div>
                </div>
                <!-- drugie śniadanie -->
                <div class="menu-grid__meal-box">
                    <div class="menu-grid__meal-image">
                        <img src="/wp-content/uploads/2022/03/brekfest2.png">
                    </div>
                    <div class="menu-grid__meal-desc">
                        <div class="menu-grid__meal-desc--name">
                            <h4> Drugie śniadanie </h4>
                        </div>
                        <div class="menu-grid__meal-desc--txt">
                            <p><?php the_field('friday_second');?></p>
                        </div>
                    </div>
                </div>
                <!-- podwieczorek -->
                <div class="menu-grid__meal-box">
                    <div class="menu-grid__meal-image">
                        <img src="/wp-content/uploads/2022/03/tea.png">
                    </div>
                    <div class="menu-grid__meal-desc">
                        <div class="menu-grid__meal-desc--name">
                            <h4> Podwieczorek </h4>
                        </div>
                        <div class="menu-grid__meal-desc--txt">
                            <p><?php the_field('friday_tea');?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- sobota -->
        <div class="filterDiv sobota">
            <div class="menu-grid">
                <!-- śniadanie -->
                <div class="menu-grid__meal-box">
                    <div class="menu-grid__meal-image">
                        <img src="/wp-content/uploads/2022/03/brekfest.png">
                    </div>
                    <div class="menu-grid__meal-desc">
                        <div class="menu-grid__meal-desc--name">
                            <h4> Śniadanie </h4>
                        </div>
                        <div class="menu-grid__meal-desc--txt">
                            <p><?php the_field('saturday_breakfest');?></p>
                        </div>
                    </div>
                </div>
                <!-- obiad -->
                <div class="menu-grid__meal-box">
                    <div class="menu-grid__meal-image">
                        <img src="/wp-content/uploads/2022/03/dinner.png">
                    </div>
                    <div class="menu-grid__meal-desc">
                        <div class="menu-grid__meal-desc--name">
                            <h4> Obiad </h4>
                        </div>
                        <div class="menu-grid__meal-desc--txt">
                            <p><?php the_field('saturday_dinner');?></p>
                        </div>
                    </div>
                </div>
                <!-- kolacja -->
                <div class="menu-grid__meal-box">
                    <div class="menu-grid__meal-image">
                        <img src="/wp-content/uploads/2022/03/supper.png">
                    </div>
                    <div class="menu-grid__meal-desc">
                        <div class="menu-grid__meal-desc--name">
                            <h4> Kolacja </h4>
                        </div>
                        <div class="menu-grid__meal-desc--txt">
                            <p><?php the_field('saturday_supper');?></p>
                        </div>
                    </div>
                </div>
                <!-- drugie śniadanie -->
                <div class="menu-grid__meal-box">
                    <div class="menu-grid__meal-image">
                        <img src="/wp-content/uploads/2022/03/brekfest2.png">
                    </div>
                    <div class="menu-grid__meal-desc">
                        <div class="menu-grid__meal-desc--name">
                            <h4> Drugie śniadanie </h4>
                        </div>
                        <div class="menu-grid__meal-desc--txt">
                            <p><?php the_field('saturday_second');?></p>
                        </div>
                    </div>
                </div>
                <!-- podwieczorek -->
                <div class="menu-grid__meal-box">
                    <div class="menu-grid__meal-image">
                        <img src="/wp-content/uploads/2022/03/tea.png">
                    </div>
                    <div class="menu-grid__meal-desc">
                        <div class="menu-grid__meal-desc--name">
                            <h4> Podwieczorek </h4>
                        </div>
                        <div class="menu-grid__meal-desc--txt">
                            <p><?php the_field('saturday_tea');?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- niedziela -->
        <div class="filterDiv niedziela">
            <div class="menu-grid">
                <!-- śniadanie -->
                <div class="menu-grid__meal-box">
                    <div class="menu-grid__meal-image">
                        <img src="/wp-content/uploads/2022/03/brekfest.png">
                    </div>
                    <div class="menu-grid__meal-desc">
                        <div class="menu-grid__meal-desc--name">
                            <h4> Śniadanie </h4>
                        </div>
                        <div class="menu-grid__meal-desc--txt">
                            <p><?php the_field('sunday_breakfest');?></p>
                        </div>
                    </div>
                </div>
                <!-- obiad -->
                <div class="menu-grid__meal-box">
                    <div class="menu-grid__meal-image">
                        <img src="/wp-content/uploads/2022/03/dinner.png">
                    </div>
                    <div class="menu-grid__meal-desc">
                        <div class="menu-grid__meal-desc--name">
                            <h4> Obiad </h4>
                        </div>
                        <div class="menu-grid__meal-desc--txt">
                            <p><?php the_field('sunday_dinner');?></p>
                        </div>
                    </div>
                </div>
                <!-- kolacja -->
                <div class="menu-grid__meal-box">
                    <div class="menu-grid__meal-image">
                        <img src="/wp-content/uploads/2022/03/supper.png">
                    </div>
                    <div class="menu-grid__meal-desc">
                        <div class="menu-grid__meal-desc--name">
                            <h4> Kolacja </h4>
                        </div>
                        <div class="menu-grid__meal-desc--txt">
                            <p><?php the_field('sunday_supper');?></p>
                        </div>
                    </div>
                </div>
                <!-- drugie śniadanie -->
                <div class="menu-grid__meal-box">
                    <div class="menu-grid__meal-image">
                        <img src="/wp-content/uploads/2022/03/brekfest2.png">
                    </div>
                    <div class="menu-grid__meal-desc">
                        <div class="menu-grid__meal-desc--name">
                            <h4> Drugie śniadanie </h4>
                        </div>
                        <div class="menu-grid__meal-desc--txt">
                            <p><?php the_field('sunday_second');?></p>
                        </div>
                    </div>
                </div>
                <!-- podwieczorek -->
                <div class="menu-grid__meal-box">
                    <div class="menu-grid__meal-image">
                        <img src="/wp-content/uploads/2022/03/tea.png">
                    </div>
                    <div class="menu-grid__meal-desc">
                        <div class="menu-grid__meal-desc--name">
                            <h4> Podwieczorek </h4>
                        </div>
                        <div class="menu-grid__meal-desc--txt">
                            <p><?php the_field('sunday_tea');?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>
<?php include 'slider.php'?>
<?php include 'process.php'?>
<?php include 'contact.php'?>

<?php get_footer();?>
<script src="/wp-content/themes/pogodabrzucha/assets/js/filter-menu.js"></script>
<script src="/wp-content/themes/pogodabrzucha/assets/js/slider.js"></script>
<script src="/wp-content/themes/pogodabrzucha/assets/js/main-slider.js"></script>