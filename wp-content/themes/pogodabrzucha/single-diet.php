<?php

/**
 * Template Name: Single diet
 * @package WordPress
 * @subpackage astra
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header(); ?>

<section class="section-diet-hero">
    <div class="diet-hero">
        <div class="diet-hero__image-wrap">
            <?php echo wp_get_attachment_image(get_field('header_dish_img'), 'full') ?>
        </div>
        <div class="diet-hero__content-wrap">
            <div class="diet-hero__content-bg-wrap">
                <?php echo wp_get_attachment_image(get_field('header_content_img'), 'full') ?>
            </div>
            <div class="diet-hero__header-wrap">
                <div class="diet-hero__price-wrap">
                    <div class="diet-hero__price-img-wrap">
                        <?php echo wp_get_attachment_image(get_field('header_price_img'), 'full') ?>
                    </div>
                    <span>od <?php the_field('kcal_v1_price') ?> zł</span>
                </div>
                <h1>
                    <span>Dieta </span>
                    <div class="diet-hero__header-badge-wrap <?php echo (!get_field('header_badge') ? 'no-badge' : '') ?>">
                        <span>— <?php the_field('name_diet') ?>
                            <svg id="Group_560" data-name="Group 560" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="106.946" height="106.96" viewBox="0 0 106.946 106.96">
                                <defs>
                                    <clipPath id="clip-path">
                                        <rect id="Rectangle_408" data-name="Rectangle 408" width="106.946" height="106.96" transform="translate(0 0)" fill="none" />
                                    </clipPath>
                                </defs>
                                <g id="Group_553" data-name="Group 553">
                                    <g id="Group_552" data-name="Group 552" clip-path="url(#clip-path)">
                                        <text id="D" transform="translate(11.585 53.735) rotate(-83.614)" fill="#ffebe6" font-size="14" font-family="Poppins-Medium, Poppins" font-weight="500">
                                            <tspan x="0" y="0">D</tspan>
                                        </text>
                                        <text id="O" transform="translate(12.63 43.829) rotate(-69.185)" fill="#ffebe6" font-size="14" font-family="Poppins-Medium, Poppins" font-weight="500">
                                            <tspan x="0" y="0">O</tspan>
                                        </text>
                                    </g>
                                </g>
                                <text id="S" transform="translate(16.677 33.609) rotate(-55.786)" fill="#ffebe6" font-size="14" font-family="Poppins-Medium, Poppins" font-weight="500">
                                    <tspan x="0" y="0">S</tspan>
                                </text>
                                <text id="T" transform="matrix(0.714, -0.7, 0.7, 0.714, 21.536, 26.536)" fill="#ffebe6" font-size="14" font-family="Poppins-Medium, Poppins" font-weight="500">
                                    <tspan x="0" y="0">T</tspan>
                                </text>
                                <text id="Ę" transform="translate(27.283 20.951) rotate(-33.871)" fill="#ffebe6" font-size="14" font-family="Poppins-Medium, Poppins" font-weight="500">
                                    <tspan x="0" y="0">Ę</tspan>
                                </text>
                                <g id="Group_555" data-name="Group 555">
                                    <g id="Group_554" data-name="Group 554" clip-path="url(#clip-path)">
                                        <text id="P" transform="translate(33.458 16.762) rotate(-22.926)" fill="#ffebe6" font-size="14" font-family="Poppins-Medium, Poppins" font-weight="500">
                                            <tspan x="0" y="0">P</tspan>
                                        </text>
                                        <text id="N" transform="matrix(0.984, -0.176, 0.176, 0.984, 41.157, 13.407)" fill="#ffebe6" font-size="14" font-family="Poppins-Medium, Poppins" font-weight="500">
                                            <tspan x="0" y="0">N</tspan>
                                        </text>
                                        <text id="A" transform="translate(51.128 11.654) rotate(3.4)" fill="#ffebe6" font-size="14" font-family="Poppins-Medium, Poppins" font-weight="500">
                                            <tspan x="0" y="0">A</tspan>
                                        </text>
                                        <text id="_" data-name=" " transform="translate(61.021 12.508) rotate(12.863)" fill="#ffebe6" font-size="14" font-family="Poppins-Medium, Poppins" font-weight="500">
                                            <tspan x="0" y="0"> </tspan>
                                        </text>
                                        <text id="W" transform="translate(64.834 12.824) rotate(25.16)" fill="#ffebe6" font-size="14" font-family="Poppins-Medium, Poppins" font-weight="500">
                                            <tspan x="0" y="0">W</tspan>
                                        </text>
                                    </g>
                                </g>
                                <text id="_2" data-name=" " transform="translate(77.268 19.277) rotate(37.348)" fill="#ffebe6" font-size="14" font-family="Poppins-Medium, Poppins" font-weight="500">
                                    <tspan x="0" y="0"> </tspan>
                                </text>
                                <text id="W-2" data-name="W" transform="matrix(0.65, 0.76, -0.76, 0.65, 80.599, 21.147)" fill="#ffebe6" font-size="14" font-family="Poppins-Medium, Poppins" font-weight="500">
                                    <tspan x="0" y="0">W</tspan>
                                </text>
                                <g id="Group_557" data-name="Group 557">
                                    <g id="Group_556" data-name="Group 556" clip-path="url(#clip-path)">
                                        <text id="E" transform="translate(89.345 32.029) rotate(64.098)" fill="#ffebe6" font-size="14" font-family="Poppins-Medium, Poppins" font-weight="500">
                                            <tspan x="0" y="0">E</tspan>
                                        </text>
                                        <text id="R" transform="matrix(0.251, 0.968, -0.968, 0.251, 92.66, 38.709)" fill="#ffebe6" font-size="14" font-family="Poppins-Medium, Poppins" font-weight="500">
                                            <tspan x="0" y="0">R</tspan>
                                        </text>
                                        <text id="S-2" data-name="S" transform="translate(94.873 47.352) rotate(87.416)" fill="#ffebe6" font-size="14" font-family="Poppins-Medium, Poppins" font-weight="500">
                                            <tspan x="0" y="0">S</tspan>
                                        </text>
                                        <text id="J" transform="translate(95.222 55.918) rotate(98.688)" fill="#ffebe6" font-size="14" font-family="Poppins-Medium, Poppins" font-weight="500">
                                            <tspan x="0" y="0">J</tspan>
                                        </text>
                                        <text id="I" transform="matrix(-0.293, 0.956, -0.956, -0.293, 93.832, 63.908)" fill="#ffebe6" font-size="14" font-family="Poppins-Medium, Poppins" font-weight="500">
                                            <tspan x="0" y="0">I</tspan>
                                        </text>
                                        <text id="_3" data-name=" " transform="translate(92.644 67.738) rotate(112.531)" fill="#ffebe6" font-size="14" font-family="Poppins-Medium, Poppins" font-weight="500">
                                            <tspan x="0" y="0"> </tspan>
                                        </text>
                                    </g>
                                </g>
                                <text id="O-2" data-name="O" transform="matrix(-0.542, 0.841, -0.841, -0.542, 91.472, 71.38)" fill="#ffebe6" font-size="14" font-family="Poppins-Medium, Poppins" font-weight="500">
                                    <tspan x="0" y="0">O</tspan>
                                </text>
                                <text id="F" transform="matrix(-0.711, 0.703, -0.703, -0.711, 85.304, 80.552)" fill="#ffebe6" font-size="14" font-family="Poppins-Medium, Poppins" font-weight="500">
                                    <tspan x="0" y="0">F</tspan>
                                </text>
                                <text id="F-2" data-name="F" transform="translate(80.063 85.715) rotate(145.398)" fill="#ffebe6" font-size="14" font-family="Poppins-Medium, Poppins" font-weight="500">
                                    <tspan x="0" y="0">F</tspan>
                                </text>
                                <text id="I-2" data-name="I" transform="translate(73.862 89.828) rotate(153.227)" fill="#ffebe6" font-size="14" font-family="Poppins-Medium, Poppins" font-weight="500">
                                    <tspan x="0" y="0">I</tspan>
                                </text>
                                <g id="Group_559" data-name="Group 559">
                                    <g id="Group_558" data-name="Group 558" clip-path="url(#clip-path)">
                                        <text id="C" transform="translate(70.534 91.848) rotate(163.477)" fill="#ffebe6" font-size="14" font-family="Poppins-Medium, Poppins" font-weight="500">
                                            <tspan x="0" y="0">C</tspan>
                                        </text>
                                        <text id="E-2" data-name="E" transform="matrix(-0.998, 0.069, -0.069, -0.998, 60.054, 94.747)" fill="#ffebe6" font-size="14" font-family="Poppins-Medium, Poppins" font-weight="500">
                                            <tspan x="0" y="0">E</tspan>
                                        </text>
                                    </g>
                                </g>
                            </svg>
                        </span>
                    </div>
                </h1>

            </div>
            <div class="diet-hero__subheader-wrap">
                <span><?php the_field('kcal_v1') ?></span>/
                <span><?php the_field('kcal_v2') ?></span>/
                <span><?php the_field('kcal_v3') ?></span>/
                <span><?php the_field('kcal_v4') ?></span>
                <span> kCal</span>
            </div>
            <div class="diet-hero__text-wrap">
                <p>Dieta sportowa będzie doskonałym wyborem, niezależnie od tego, czy chciałbyś pozbyć się zbędnych kilogramów, czy zbudować masę mięśniową.</p>
            </div>
            <div class="diet-hero__btns">
                <a class="btn-outline" href="<?php echo get_field('header_menu_button_url')['url'] ?>">Zobacz menu</a>
                <a class="btn-main" href="<?php echo get_field('header_order_button_url')['url'] ?>">Zamów</a>
            </div>

            <?php if (have_rows('header_icons')) : ?>
                <ul class="ingredients-list">
                    <?php
                    while (have_rows('header_icons')) : the_row();
                    ?>
                        <?php
                        $icon = get_sub_field('icon');
                        $text = get_sub_field('text');
                        ?>
                        <li>
                            <img src="<?php echo $icon ?>" alt="">
                            <p class="mb-0"><?php echo $text ?></p>
                        </li>
                    <?php
                    endwhile; ?>
                </ul>
            <?php
            endif;
            ?>
        </div>
    </div>
</section>



</section>
<section class="diet-description">
    <div class="diet-description__general diet-description__div">

        <div class="half-flex">
            <h2><?php the_field('header_for_whom'); ?></h2>

        </div>
        <div class="half-flex">
            <p><?php the_field('desc_first_section'); ?></p>
        </div>

    </div>
    <!-- first section -->
    <div class="diet-description__first diet-description__div">
        <div class="diet-description__img-box web-view">
            <?php
            $dietFirstImg = get_field('image_first_section');
            if (!empty($dietFirstImg)) : ?>
                <img src="<?php echo esc_url($dietFirstImg['url']); ?>" alt="<?php echo esc_attr($dietFirstImg['alt']); ?>" />
            <?php endif; ?>
        </div>
        <div class="diet-description__img-box mobile-view">
            <?php
            $dietFirstImgM = get_field('image_first_section_mobile');
            if (!empty($dietFirstImgM)) : ?>
                <img src="<?php echo esc_url($dietFirstImgM['url']); ?>" alt="<?php echo esc_attr($dietFirstImgM['alt']); ?>" />
            <?php endif; ?>
        </div>
        <div class="diet-description__img-txt">
            <h2><?php the_field('txt_first_section'); ?></h2>
            <p><?php the_field('desc_first_section'); ?></h2>
        </div>


    </div>
    <!-- second section -->
    <div class="diet-description__second diet-description__div">
        <div class="diet-description__img-txt">
            <h2><?php the_field('txt_second_section'); ?></h2>
            <p><?php the_field('desc_second_section'); ?></h2>
        </div>
        <div class="diet-description__img-box web-view">
            <?php
            $dietSecImg = get_field('image_second_section');
            if (!empty($dietFirstImg)) : ?>
                <img src="<?php echo esc_url($dietSecImg['url']); ?>" alt="<?php echo esc_attr($dietSecImg['alt']); ?>" />
            <?php endif; ?>
        </div>
        <div class="diet-description__img-box mobile-view">
            <?php
            $dietSecImgM = get_field('image_second_section_mobile');
            if (!empty($dietSecImgM)) : ?>
                <img src="<?php echo esc_url($dietSecImgM['url']); ?>" alt="<?php echo esc_attr($dietSecImgM['alt']); ?>" />
            <?php endif; ?>
        </div>
    </div>
    <!-- image third section -->
    <div class="diet-description__third diet-description__div">
        <div class="diet-description__img-box web-view">
            <?php
            $dietThreeImg = get_field('image_third_section');
            if (!empty($dietFirstImg)) : ?>
                <img src="<?php echo esc_url($dietThreeImg['url']); ?>" alt="<?php echo esc_attr($dietThreeImg['alt']); ?>" />
            <?php endif; ?>
        </div>
        <div class="diet-description__img-box mobile-view">
            <?php
            $dietThreeImgM = get_field('image_third_section_mobile');
            if (!empty($dietThreeImgM)) : ?>
                <img src="<?php echo esc_url($dietThreeImgM['url']); ?>" alt="<?php echo esc_attr($dietThreeImgM['alt']); ?>" />
            <?php endif; ?>
        </div>
        <div class="diet-description__img-txt">

            <h2><?php the_field('txt_third_section'); ?></h2>

            <p><?php the_field('desc_third_section'); ?></h2>
        </div>
    </div>
</section>
<section class="menu-diet">
    <div class="menu-diet__header">

        <h2><?php the_field('menu_header'); ?></h2>

        <p><?php the_field('menu_date'); ?></p>
        <img class="decoration decorationM1" src="/wp-content/uploads/2022/03/menu-left.png">
        <img class="decoration decorationM2" src="/wp-content/uploads/2022/03/menu-rigt.png">

    </div>

    <!-- Control buttons -->
    <div id="weekDays" class="weekDiets">
        <button class="to-filtre border-button border-button--gold web-view fill-button--brown-trans active" onclick="filterSelection('poniedzialek')">
            Poniedziałek</button>
        <button class="to-filtre border-button border-button--gold fill-button--brown-trans web-view" onclick="filterSelection('wtorek')">
            Wtorek</button>
        <button class="to-filtre border-button border-button--gold fill-button--brown-trans web-view" onclick="filterSelection('sroda')"> Środa</button>
        <button class="to-filtre border-button border-button--gold fill-button--brown-trans web-view" onclick="filterSelection('czwartek')">
            Czwartek</button>
        <button class="to-filtre border-button border-button--gold fill-button--brown-trans web-view" onclick="filterSelection('piatek')"> Piątek</button>
        <button class="to-filtre border-button border-button--gold fill-button--brown-trans web-view" onclick="filterSelection('sobota')"> Sobota</button>
        <button class="to-filtre border-button border-button--gold fill-button--brown-trans web-view" onclick="filterSelection('niedziela')">
            Niedziela</button>
        <button class="to-filtreM mobile-view border-button border-button--gold fill-button--brown-trans active-m" onclick="filterSelection('poniedzialek')"> Pon</button>
        <button class="to-filtreM border-button border-button--gold  fill-button--brown-trans mobile-view" onclick="filterSelection('wtorek')"> Wt</button>
        <button class="to-filtreM border-button border-button--gold  fill-button--brown-trans mobile-view" onclick="filterSelection('sroda')"> Śr</button>
        <button class="to-filtreM border-button border-button--gold  fill-button--brown-trans mobile-view" onclick="filterSelection('czwartek')"> Czw</button>
        <button class="to-filtreM border-button border-button--gold  fill-button--brown-trans mobile-view" onclick="filterSelection('piatek')"> Pt</button>
        <button class="to-filtreM border-button border-button--gold  fill-button--brown-trans mobile-view" onclick="filterSelection('sobota')"> Sob</button>
        <button class="to-filtreM border-button border-button--gold  fill-button--brown-trans mobile-view" onclick="filterSelection('niedziela')"> Nd</button>
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
                            <p><?php the_field('monday_breakfest'); ?></p>
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
                            <p><?php the_field('monday_dinner'); ?></p>
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
                            <p><?php the_field('monday_supper'); ?></p>
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
                            <p><?php the_field('monday_second'); ?></p>
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
                            <p><?php the_field('monday_tea'); ?></p>
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
                            <p><?php the_field('tuesday_breakfest'); ?></p>
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
                            <p><?php the_field('tuesday_dinner'); ?></p>
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
                            <p><?php the_field('tuesday_supper'); ?></p>
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
                            <p><?php the_field('tuesday_second'); ?></p>
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
                            <p><?php the_field('tuesday_tea'); ?></p>
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
                            <p><?php the_field('wednesday_breakfest'); ?></p>
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
                            <p><?php the_field('wednesday_dinner'); ?></p>
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
                            <p><?php the_field('wednesday_supper'); ?></p>
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
                            <p><?php the_field('wednesday_second'); ?></p>
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
                            <p><?php the_field('wednesday_tea'); ?></p>
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
                            <p><?php the_field('thursday_breakfest'); ?></p>
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
                            <p><?php the_field('thursday_dinner'); ?></p>
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
                            <p><?php the_field('thursday_supper'); ?></p>
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
                            <p><?php the_field('thursday_second'); ?></p>
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
                            <p><?php the_field('thursday_tea'); ?></p>
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
                            <p><?php the_field('friday_breakfest'); ?></p>
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
                            <p><?php the_field('friday_dinner'); ?></p>
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
                            <p><?php the_field('friday_supper'); ?></p>
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
                            <p><?php the_field('friday_second'); ?></p>
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
                            <p><?php the_field('friday_tea'); ?></p>
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
                            <p><?php the_field('saturday_breakfest'); ?></p>
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
                            <p><?php the_field('saturday_dinner'); ?></p>
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
                            <p><?php the_field('saturday_supper'); ?></p>
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
                            <p><?php the_field('saturday_second'); ?></p>
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
                            <p><?php the_field('saturday_tea'); ?></p>
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
                            <p><?php the_field('sunday_breakfest'); ?></p>
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
                            <p><?php the_field('sunday_dinner'); ?></p>
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
                            <p><?php the_field('sunday_supper'); ?></p>
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
                            <p><?php the_field('sunday_second'); ?></p>
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
                            <p><?php the_field('sunday_tea'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>
<?php include 'slider.php' ?>
<?php include 'process.php' ?>
<?php include 'contact.php' ?>

<?php get_footer(); ?>