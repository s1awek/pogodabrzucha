<?php

/**
 * Template Name: Prices
 * @package WordPress
 * @subpackage astra
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header(); ?>
<section class="price__banner">
    <div class="half-flex">
        <div class="price__banner-txt">


            <div class="web-view">
                <h2><?php the_field('pricing_header') ?></h2>
                <?php
                $subImg = get_field('pricing_subheader');
                if (!empty($subImg)) : ?>
                    <img src="<?php echo esc_url($subImg['url']); ?>" alt="<?php echo esc_attr($subImg['alt']); ?>" />
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="half-flex">
        <div class="web-view">
            <?php
            $priceFirstImg = get_field('pricing_header_image');
            if (!empty($priceFirstImg)) : ?>
                <img src="<?php echo esc_url($priceFirstImg['url']); ?>" alt="<?php echo esc_attr($priceFirstImg['alt']); ?>" />
            <?php endif; ?>
        </div>
        <div class="mobile-view">
            <?php
            $subImgM = get_field('pricing_header_image_mobile');
            if (!empty($subImgM)) : ?>
                <img src="<?php echo esc_url($subImgM['url']); ?>" alt="<?php echo esc_attr($subImgM['alt']); ?>" />
            <?php endif; ?>
            <h2><?php the_field('pricing_header') ?></h2>
            <p class="subtext"><?php the_field('pricing_subheader_mobile'); ?></p>
        </div>
    </div>
</section>
<section class="diet-filters">
    <!-- Control buttons -->
    <div id="diets" class="diets">
        <div class="diet-box active" onclick="filterSelection('sportowa')">
            <div class="diet-box__img">
                <?php
                $filter1 = get_field('diet_image-filter');
                if (!empty($priceFirstImg)) : ?>
                    <img src="<?php echo esc_url($filter1['url']); ?>" alt="<?php echo esc_attr($filter1['alt']); ?>" />
                <?php endif; ?>
            </div>
            <div class="diet-box__txt">
                <h4> Dieta <?php the_field('diet_1_name') ?></h4>
            </div>

        </div>
        <div class="diet-box " onclick="filterSelection('weganska')">

            <div class="diet-box__img">
                <?php
                $filter2 = get_field('diet_image-filter2');
                if (!empty($filter2)) : ?>
                    <img src="<?php echo esc_url($filter2['url']); ?>" alt="<?php echo esc_attr($filter2['alt']); ?>" />
                <?php endif; ?>
            </div>
            <div class="diet-box__txt">
                <h4> Dieta <?php the_field('diet_2_name') ?></h4>
            </div>

        </div>
        <div class="diet-box " onclick="filterSelection('standard')">

            <div class="diet-box__img">
                <?php
                $filter3 = get_field('diet_image-filter3');
                if (!empty($filter3)) : ?>
                    <img src="<?php echo esc_url($filter3['url']); ?>" alt="<?php echo esc_attr($filter3['alt']); ?>" />
                <?php endif; ?>
            </div>
            <div class="diet-box__txt">
                <h4> Dieta <?php the_field('diet_3_name') ?></h4>
            </div>
        </div>

    </div>
    <div class="container prices-filter">
        <div class="filterDiv sportowa show">
            <div class="signle-diet__title">
                <h2>Dieta <?php the_field('diet_1_name') ?></h2>
            </div>

            <div class="kcal">
                <div class="kcal--1">
                    <div class="kcal-part--1"> <?php the_field('diet1_kcal_v1') ?> kCal</div>
                    <div class="kcal-part--2"> <?php the_field('diet1_price_v1') ?> zł</div>
                </div>

                <div class="kcal--2">
                    <div class="kcal-part--1"> <?php the_field('diet1_kcal_v2') ?> kCal</div>
                    <div class="kcal-part--2"> <?php the_field('diet1_price_v2') ?> zł</div>
                </div>

                <div class="kcal--3">
                    <div class="kcal-part--1"> <?php the_field('diet1_kcal_v3') ?> kCal</div>
                    <div class="kcal-part--2"> <?php the_field('diet1_price_v3') ?> zł</div>
                </div>
            </div>

        </div>
        <div class="filterDiv standard">
            <div class="signle-diet__title">
                <h2>Dieta <?php the_field('diet_2_name') ?></h2>
            </div>
            <div class="kcal">
                <div class="kcal--1">
                    <div class="kcal-part--1"> <?php the_field('diet2_kcal_v1') ?> kCal</div>
                    <div class="kcal-part--2"> <?php the_field('diet2_price_v1') ?> zł</div>
                </div>

                <div class="kcal--2">
                    <div class="kcal-part--1"> <?php the_field('diet2_kcal_v2') ?> kCal</div>
                    <div class="kcal-part--2"> <?php the_field('diet2_price_v2') ?> zł</div>
                </div>

                <div class="kcal--3">
                    <div class="kcal-part--1"> <?php the_field('diet2_kcal_v3') ?> kCal</div>
                    <div class="kcal-part--2"> <?php the_field('diet2_price_v3') ?> zł</div>
                </div>
                <div class="kcal--4">
                    <div class="kcal-part--1"> <?php the_field('diet2_kcal_v4') ?> kCal</div>
                    <div class="kcal-part--2"> <?php the_field('diet2_price_v4') ?> zł</div>
                </div>
            </div>

        </div>
        <div class="filterDiv weganska">
            <div class="signle-diet__title">
                <h2>Dieta <?php the_field('diet_3_name') ?></h2>
                <div class="kcal">
                    <div class="kcal--1">
                        <div class="kcal-part--1"> <?php the_field('diet3_kcal_v1') ?> kCal</div>
                        <div class="kcal-part--2"> <?php the_field('diet3_price_v1') ?> zł</div>
                    </div>

                    <div class="kcal--2">
                        <div class="kcal-part--1"> <?php the_field('diet3_kcal_v2') ?> kCal</div>
                        <div class="kcal-part--2"> <?php the_field('diet3_price_v2') ?> zł</div>
                    </div>

                    <div class="kcal--3">
                        <div class="kcal-part--1"> <?php the_field('diet3_kcal_v3') ?> kCal</div>
                        <div class="kcal-part--2"> <?php the_field('diet3_price_v3') ?> zł</div>
                    </div>
                    <div class="kcal--4">
                        <div class="kcal-part--1"> <?php the_field('diet3_kcal_v4') ?> kCal</div>
                        <div class="kcal-part--2"> <?php the_field('diet3_price_v4') ?> zł</div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="price__cta">
    <div class="price__cta-header">
        <h2><?php the_field('pricing_first_cta_header'); ?></h2>
    </div>
    <div class="price__cta-content">
        <?php the_field('pricing_first_cta'); ?>
    </div>
    <div class="submit-button submit-button-v1">
        <img class="decoration decorationC1" src="/wp-content/uploads/2022/03/chmurka-ciemna-contact.png">
        <div class="submit-button__row">
            <a href="#"> zamów swoją dietę </a>
            <img class="decoration decorationC2" src="/wp-content/uploads/2022/03/chmurka-button-gorna.png">
            <img class="decoration decorationC3" src="/wp-content/uploads/2022/03/chmurka-button-dolna-1.png">
        </div>
    </div>
    <div class="price__cta-header">
        <h2><?php the_field('pricing_second_cta_header'); ?></h2>
    </div>
    <div class="price__cta-content">
        <img class="decoration decorationPr1" src="/wp-content/uploads/2022/03/profit-left.png">
        <img class="decoration decorationPr2" src="/wp-content/uploads/2022/03/profit-right.png">
        <?php the_field('pricing_second_cta_text'); ?>
    </div>
</section>
<section class="price__order-test">
    <div class="half-flex mobile-view">
        <?php
        $priceSecondImgM = get_field('pricing_test_image_mobile');
        if (!empty($priceSecondImgM)) : ?>
            <img src="<?php echo esc_url($priceSecondImgM['url']); ?>" alt="<?php echo esc_attr($priceSecondImgM['alt']); ?>" />
        <?php endif; ?>
    </div>
    <div class="half-flex">
        <div class="price__order-test-txt">
            <h2><?php the_field('pricing_test_header') ?></h2>
            <p><?php the_field('pricing_test_subheader') ?></p>
            <a class="price__order-test-link" href="#">Zamów swój zestaw testowy</a>
        </div>
    </div>
    <div class="half-flex web-view">
        <?php
        $priceSecondImg = get_field('pricing_test_image');
        if (!empty($priceSecondImg)) : ?>
            <img src="<?php echo esc_url($priceSecondImg['url']); ?>" alt="<?php echo esc_attr($priceSecondImg['alt']); ?>" />
        <?php endif; ?>
    </div>
</section>
<?php include 'contact.php' ?>
<?php get_footer(); ?>