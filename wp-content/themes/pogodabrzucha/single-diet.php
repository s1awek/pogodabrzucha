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
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="146.439" height="146.24" viewBox="0 0 146.439 146.24">
                                <defs>
                                    <clipPath id="a">
                                        <rect width="146.439" height="146.24" fill="none" />
                                    </clipPath>
                                </defs>
                                <g clip-path="url(#a)">
                                    <path d="M8.264,59.333C4,58.855,1,61.453.5,65.873l-.5,4.5,13.781,1.543.5-4.5c.5-4.42-1.779-7.613-6.019-8.084m4.178,7.879-.248,2.238L2.1,68.322l.248-2.238c.365-3.255,2.5-4.78,5.659-4.427,3.131.348,4.8,2.3,4.439,5.555" fill="#fdeae6" />
                                    <path d="M13.9,42.9A7.086,7.086,0,1,0,8.865,56.153a6.949,6.949,0,0,0,9.156-4.1A6.923,6.923,0,0,0,13.9,42.9m2.275,8.45c-.973,2.566-3.552,3.726-6.478,2.616s-4.054-3.676-3.075-6.249,3.521-3.75,6.453-2.635,4.079,3.689,3.1,6.268" fill="#fdeae6" />
                                    <path d="M23.718,33.582c-4.191-2.852-6.7,4.321-9.292,2.56-1.1-.75-1.061-1.953-.292-3.019a2.177,2.177,0,0,1,2.827-.9l1.413-2.076c-2.07-1.172-4.277-.4-5.765,1.791-1.6,2.343-1.432,4.8.577,6.162,4.228,2.87,6.565-4.438,9.342-2.554.973.663,1.178,1.891.279,3.211a2.233,2.233,0,0,1-3.094.887l-1.37,2.015c2.034,1.376,4.489.464,6.045-1.829,1.742-2.554,1.047-5.084-.67-6.249" fill="#fdeae6" />
                                    <path d="M26.83,18.8l-1.3-1.32-6.906,6.775,1.3,1.321,2.647-2.6,8.413,8.58,1.624-1.593L24.2,21.388Z" fill="#fdeae6" />
                                    <path d="M44.244,24.487a.951.951,0,0,1-1.426-.149c-.266-.4-.26-.893.211-1.736l.533-.954L42.533,20.11l-4.476,3.007-2.374-3.534,3.98-2.672-1.035-1.537-3.974,2.672-2.269-3.385,4.476-3.007-1.035-1.537-6.367,4.271L37.2,25.919l4.042-2.709a2.566,2.566,0,0,0,.167,2.362c.893,1.32,2.362,1.01,3.4.31a4.528,4.528,0,0,0,1.178-1.147L45.18,23.52a3.69,3.69,0,0,1-.936.967" fill="#fdeae6" />
                                    <path d="M45.13,5.573,40.716,7.439,46.122,20.21l2.095-.887L46.023,14.14l2.318-.979c3.323-1.407,3.683-3.874,2.914-5.7-.874-2.071-3.093-3.174-6.125-1.891m2.486,5.877-2.312.979L43.537,8.257l2.312-.979c1.637-.688,2.7-.229,3.261,1.1.546,1.29.143,2.387-1.494,3.075" fill="#fdeae6" />
                                    <path d="M63.7.49l1.823,10.173-8.555-8.97-2.245.4,2.443,13.669,2.244-.4L57.59,5.164l8.555,9,2.245-.4L65.947.087Z" fill="#fdeae6" />
                                    <path d="M76.337,0,70.56,13.571l2.368.142,1.165-2.777,5.8.347.831,2.889,2.387.142L78.972.161Zm-1.5,9.125,2.653-6.3L79.356,9.4Z" fill="#fdeae6" />
                                    <path d="M102.857,9.931l-1.823,10.737,2.331,1.091,9.615-10.805-2.2-1.029-7.4,8.933,2.163-11.4-2.312-1.085-7.625,8.9L97.812,3.831,95.623,2.8l-2.35,14.246L95.6,18.114Z" fill="#fdeae6" />
                                    <path d="M126.266,27.779l-6.088,9.038,1.674,1.953,13.211-5.889-1.581-1.847-10.415,5.108,6.652-9.5-1.661-1.94-10.6,4.972,6.714-9.522L122.6,18.313l-8,12.014,1.668,1.928Z" fill="#fdeae6" />
                                    <path d="M128.256,50.76l1.668-.812-2.35-4.848,3.825-1.853,2.089,4.3,1.668-.806-2.089-4.309,3.663-1.779,2.35,4.848,1.667-.812L137.4,37.8l-12.492,6.069Z" fill="#fdeae6" />
                                    <path d="M129.923,55.676l5.369-1.4.434,1.68-4.569,4.482.682,2.628,4.705-4.761a3.937,3.937,0,0,0,4.65,2.108c2.182-.564,3.608-2.6,2.783-5.79l-1.2-4.637-13.421,3.478Zm11.624-3.013.632,2.436c.447,1.711-.223,2.709-1.574,3.063-1.333.341-2.48-.186-2.926-1.9l-.633-2.437Z" fill="#fdeae6" />
                                    <path d="M136.327,72.705c-1.178.056-2.077-.806-2.151-2.4a2.23,2.23,0,0,1,1.946-2.567l-.111-2.424c-2.455.112-3.875,2.306-3.751,5.077.137,3.094,2.213,4.693,4.29,4.6,5.065-.229,2.771-7.476,5.908-7.619,1.327-.062,2.015.937,2.033,2.251a2.171,2.171,0,0,1-1.723,2.417l.118,2.5c2.355-.3,3.664-2.238,3.546-4.891-.124-2.827-1.73-4.693-4.154-4.588-5.108.236-2.6,7.5-5.951,7.644" fill="#fdeae6" />
                                    <path d="M133.73,81.706a1.743,1.743,0,0,1,2.232-1.469l.347-2.275a4.093,4.093,0,0,0-1.234,8.09l9.888,1.512.347-2.275-9.888-1.506a1.738,1.738,0,0,1-1.692-2.077" fill="#fdeae6" />
                                    <rect width="2.277" height="13.869" transform="translate(129.537 91.488) rotate(-72.976)" fill="#fdeae6" />
                                    <path d="M132.744,102.907a7.084,7.084,0,1,0,2.114,9.789,6.952,6.952,0,0,0-2.114-9.789m.44,8.71c-1.488,2.312-4.216,2.932-6.85,1.234s-3.23-4.451-1.742-6.77,4.252-2.914,6.887-1.215,3.2,4.439,1.705,6.751" fill="#fdeae6" />
                                    <path d="M115.832,114.209l4.265,4.321-3.261,3.23,1.3,1.314,3.261-3.23,2.876,2.914-4.184,4.141,1.3,1.314,5.8-5.74-9.745-9.863Z" fill="#fdeae6" />
                                    <path d="M107.953,121.053l3.447,5-3.775,2.6,1.047,1.525,3.782-2.6,2.324,3.366-4.847,3.341,1.053,1.525,6.714-4.631-7.873-11.412Z" fill="#fdeae6" />
                                    <path d="M98.865,126.465l6.249,12.374,2.027-1.023-6.243-12.38Z" fill="#fdeae6" />
                                    <path d="M89.963,129.75a6.573,6.573,0,0,0-5,5.8l2.617-.774a3.882,3.882,0,0,1,2.938-3.143c2.641-.788,5.12.545,6.013,3.546s-.471,5.443-3.112,6.23a3.884,3.884,0,0,1-4.178-1.029l-2.616.775a6.61,6.61,0,0,0,7.364,2.169,7.081,7.081,0,1,0-4.029-13.576" fill="#fdeae6" />
                                    <path d="M73.448,132.391l.13,1.847,5.375-.372.291,4.241-4.779.335.13,1.853,4.78-.335.278,4.061-5.374.372.124,1.847,7.649-.527-.96-13.849Z" fill="#fdeae6" />
                                </g><text transform="translate(22.72 43)" fill="#ffebe6" font-size="10" font-family="Poppins-Medium, Poppins" font-weight="500">
                                    <tspan x="19.355" y="11">W TEJ DIECIE</tspan>
                                    <tspan x="8.775" y="27">MOŻESZ USUNĄĆ</tspan>
                                    <tspan x="24.495" y="43">ŚNIADANIE</tspan>
                                    <tspan x="14.395" y="59">I/LUB KOLACJĘ</tspan>
                                </text>
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
                        $ing = get_sub_field('ing');
                        $text = get_sub_field('text');
                        ?>
                        <li>
                            <img src="<?php echo $icon ?>" alt="">
                            <p class="mb-0"><?php echo $ing ?></p>
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
    <div class="menu-diet__inner">
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
            <div class="filterDiv poniedzialek show">
                <div class="menu-grid">
                    <!-- śniadanie -->
                    <div class="menu-grid__meal-box">
                        <div class="menu-grid__meal-image">
                            <img src="/wp-content/uploads/2022/03/brekfest.svg">
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
                            <img src="/wp-content/uploads/2022/03/dinner.svg">
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
                            <img src="/wp-content/uploads/2022/03/supper.svg">
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
                            <img src="/wp-content/uploads/2022/03/brekfest2.svg">
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
                            <img src="/wp-content/uploads/2022/03/tea.svg">
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
                            <img src="/wp-content/uploads/2022/03/brekfest.svg">
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
                            <img src="/wp-content/uploads/2022/03/dinner.svg">
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
                            <img src="/wp-content/uploads/2022/03/supper.svg">
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
                            <img src="/wp-content/uploads/2022/03/brekfest2.svg">
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
                            <img src="/wp-content/uploads/2022/03/tea.svg">
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
                            <img src="/wp-content/uploads/2022/03/brekfest.svg">
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
                            <img src="/wp-content/uploads/2022/03/dinner.svg">
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
                            <img src="/wp-content/uploads/2022/03/supper.svg">
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
                            <img src="/wp-content/uploads/2022/03/brekfest2.svg">
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
                            <img src="/wp-content/uploads/2022/03/tea.svg">
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
                            <img src="/wp-content/uploads/2022/03/brekfest.svg">
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
                            <img src="/wp-content/uploads/2022/03/dinner.svg">
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
                            <img src="/wp-content/uploads/2022/03/supper.svg">
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
                            <img src="/wp-content/uploads/2022/03/brekfest2.svg">
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
                            <img src="/wp-content/uploads/2022/03/tea.svg">
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
                            <img src="/wp-content/uploads/2022/03/brekfest.svg">
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
                            <img src="/wp-content/uploads/2022/03/dinner.svg">
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
                            <img src="/wp-content/uploads/2022/03/supper.svg">
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
                            <img src="/wp-content/uploads/2022/03/brekfest2.svg">
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
                            <img src="/wp-content/uploads/2022/03/tea.svg">
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
                            <img src="/wp-content/uploads/2022/03/brekfest.svg">
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
                            <img src="/wp-content/uploads/2022/03/dinner.svg">
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
                            <img src="/wp-content/uploads/2022/03/supper.svg">
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
                            <img src="/wp-content/uploads/2022/03/brekfest2.svg">
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
                            <img src="/wp-content/uploads/2022/03/tea.svg">
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
                            <img src="/wp-content/uploads/2022/03/brekfest.svg">
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
                            <img src="/wp-content/uploads/2022/03/dinner.svg">
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
                            <img src="/wp-content/uploads/2022/03/supper.svg">
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
                            <img src="/wp-content/uploads/2022/03/brekfest2.svg">
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
                            <img src="/wp-content/uploads/2022/03/tea.svg">
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
    </div>

</section>
<?php include 'slider.php' ?>
<?php include 'process.php' ?>
<?php include 'contact.php' ?>

<?php get_footer(); ?>