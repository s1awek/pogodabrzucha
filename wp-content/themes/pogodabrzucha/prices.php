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
        <div class="diet-box " onclick="filterSelection('standard')">

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
        <div class="diet-box " onclick="filterSelection('wegetarianska')">

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
            <div class="signle-diet__title">
                <h2>Zestaw testowy</h2>
            </div>
            <div class="kcal">
                <?php if (have_rows('test_diet_1')) :
                    $counter = 1;
                    while (have_rows('test_diet_1')) : the_row();

                        $kcal = get_sub_field('kcal');
                        $price = get_sub_field('price');
                ?>
                        <div class="kcal--<?php echo $counter ?>">
                            <div class="kcal-part--1"><?php echo $kcal ?> kCal</div>
                            <div class="kcal-part--2"><?php echo $price ?> zł</div>
                        </div>
                <?php
                        $counter++;
                    endwhile;
                endif;
                ?>
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
            <div class="signle-diet__title">
                <h2>Zestaw testowy</h2>
            </div>
            <div class="kcal">
                <?php if (have_rows('test_diet_2')) :
                    $counter = 1;
                    while (have_rows('test_diet_2')) : the_row();

                        $kcal = get_sub_field('kcal');
                        $price = get_sub_field('price');
                ?>
                        <div class="kcal--<?php echo $counter ?>">
                            <div class="kcal-part--1"><?php echo $kcal ?> kCal</div>
                            <div class="kcal-part--2"><?php echo $price ?> zł</div>
                        </div>
                <?php
                        $counter++;
                    endwhile;
                endif;
                ?>
            </div>
        </div>
        <div class="filterDiv wegetarianska">
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
                <div class="signle-diet__title">
                    <h2>Zestaw testowy</h2>
                </div>
                <div class="kcal">
                    <?php if (have_rows('test_diet_3')) :
                        $counter = 1;
                        while (have_rows('test_diet_3')) : the_row();

                            $kcal = get_sub_field('kcal');
                            $price = get_sub_field('price');
                    ?>
                            <div class="kcal--<?php echo $counter ?>">
                                <div class="kcal-part--1"><?php echo $kcal ?> kCal</div>
                                <div class="kcal-part--2"><?php echo $price ?> zł</div>
                            </div>
                    <?php
                            $counter++;
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </div>
        <div class="free-delivery">
            <div class="free-delivery__icon-wrap">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="146.486" height="119.161" viewBox="0 0 146.486 119.161">
                    <defs>
                        <clipPath id="a">
                            <rect width="119.012" height="98.169" fill="#ffebe6" />
                        </clipPath>
                        <clipPath id="b">
                            <rect width="117.38" height="103.872" fill="none" stroke="#583337" stroke-width="1.5" />
                        </clipPath>
                    </defs>
                    <g transform="translate(-560.763 -2096.434)">
                        <g transform="translate(560.763 2096.434)">
                            <g clip-path="url(#a)">
                                <path d="M.875,69.985c-8.237,32.021,43.281,33.78,86.561,20.057S124.383,43.595,99.048,18.26,23.668-18.62.875,69.985" transform="translate(0 0)" fill="#ffebe6" />
                            </g>
                        </g>
                        <g transform="translate(589.869 2111.723)">
                            <g clip-path="url(#b)">
                                <path d="M95.747,68.718c-2.876.375-9.127,1.875-11.127,10.628s3,19.5,9.377,22.755,15.128,4.751,20.63-4.376,1.376-18.254-1.5-22.005-7.752-7.126-9.877-7.877-4.117.751-2.5,3,12.5.751,11.873-1.5-4.876-6.876-6.126-9.377-2.867-2.751-5.747-3.5-9.131-3.126-13.883,1-5.626,11.753-5.751,14.379.853,4,1.926,4.626,1.575,1.281-2.427,3.391S69.866,85.472,64.99,84.972s-1.75-4.251,0-3.876,4,6.251-7.126,3c-2.517-.735-4.861-1.464-7.005-2.153-2.008-.646-3.842-1.257-5.477-1.805-4.333-1.455-7.273-2.473-8.4-2.542-2-.126-1.376,1.375,0,2.75s10.127-.844,12.253-.485,3.126,3.735-2.626,3.861-13.878,3.251-18,.125-7.751-.125-13.378-5.251-.375-10.127,4.126-8.752a18.61,18.61,0,0,1,9.5,7.626c1,2,1.626,4.126,3.5,4.5s11.377,0,9.127-7.627-13.128-15.5-20.5-9.752-3.376,19.754-.5,22.63,7.382,4.907,12.628,1.25,3.876-16.754-.875-18.254-12.128-4.751-14.379-6.251-5-3.6-3-8.864,6.627-9.516,7.126-11.641,1.626-5.376.126-5.626-3.876,1.875-2.876,2.876,3.376,3.251,6,3.876,6-2.876,7.376-2.375,3.876,3.5,9.252,4.126a63.74,63.74,0,0,0,12.127.5c2.126-.25,3.635-.507,4.12-.629.759-.189,2.882-.372,2.632-2.747s-1.125-5.416-5.251-5.646-5.627,3.021-13.5,2.77-9.377-1.314-9.127-2.782,8.377-2.093,11.5-1.344a63.538,63.538,0,0,1,8.877,3.5" transform="translate(-0.435 -1.229)" fill="none" stroke="#583337" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.5" />
                                <path d="M24.6,36.113s8.751-1.057,11.5-.807-6.252,1.063-5.751,3.251c.283,1.243.514,2.25-.167,3.313a4.045,4.045,0,0,1-5.584.812c-2.375-1.625.875-3.306.875-3.306" transform="translate(-0.807 -1.2)" fill="none" stroke="#583337" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.5" />
                                <path d="M59.763,46.747s-2.876,7.876-2,11.127,2.626,11.077,7.752,12.04,7.877.962,8.251-.788-1.25-3.25-.75-6.376,2-9.628,1.375-13.379-2.876-9.627-4-12.627-1.438-4.376-.751-5.751a3.359,3.359,0,0,0-.063-3.5c-.625-1.377,1.75-3.377,3.814-4.5s6.564-.689,8.377,1.688,7.751,9.94,11.377,16.754,5.064,7.313,4.938,9.44-9.877,5.751-14.066.437S72.328,33.994,71.765,31.68s-1.063-4.375,1.313-5.438,2.438-.188,5.189,2.75S88.582,43.934,92.02,43.87" transform="translate(-1.959 -0.762)" fill="none" stroke="#583337" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.5" />
                                <path d="M54.839,19.243s7.518.06,9.582,0,5,.25,6,1.812-.75,3.189-1.375,2.251-1.084-3.375,1.677-5.876,6.074-2.251,7.637.688,1.938,4,3,3.188.1-1.809,3.115-1.655,4.449-5.471,3.762-7.785S85.362,7.05,83.8,9.614s-2.313,5.188-1.875,6.939,1.187,2.813,1.376,1.813-.875-2.188-.5-4.189,2.313-3.751,2.375-4.439-1.191-1.277-3.032-.625A4.62,4.62,0,0,0,79.4,14.321a11.184,11.184,0,0,1,.759,3.861c-.125,1.5-1.023,2.684-2.413,2.059s-3.7-3.438-4.266-7.939-.937-6.5-.312-6.438,3.688,0,4.063,0,.813.314,1.689,1.752L79.8,9.051" transform="translate(-1.865 -0.199)" fill="none" stroke="#583337" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.5" />
                                <path d="M57.424,9.369c-1.147.375-5.273.247-4.836-3.69S55.32.179,57.424.554a4.058,4.058,0,0,1,3.041,4c-.125,1.25-.5,2.876,1.188,4.189s3.626,1.625,4.251,4.189c.252,1.034-.05,3.688.506,4.5s1.57,2.876,0,3.251S54.339,22,53.4,21.655s-1.251-2.159-.376-3.222,2.063.812,2.063,1.625A4.954,4.954,0,0,1,53.9,23.746" transform="translate(-1.786 -0.017)" fill="none" stroke="#583337" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.5" />
                                <path d="M78.3,48.7s1.188,4.5-.751,11S73.613,74.46,71.988,76.648s-4.064,4.688-10.628,3.876-16.816-1.938-16.191-3,3.251.375,3.5-1.064-6.314,0-8.439-2.437" transform="translate(-1.368 -1.657)" fill="none" stroke="#583337" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.5" />
                                <path d="M19.522,50.976s7.314-3.751,13.128.187,4.259,12.065,3.848,13-.535,2.188,3.778,2.563,8.627-.375,10.378,1.125,2.736,3.438,8.088,4.376,10.272,1.125,11.532.562,2.635-1.437-.678-2.875-9.2-1.313-10.854-.563-5.525,2-4.525,2.688,1.875-1.75,1-2.813-6.627-2-6.688-6.376,6.5-4,6.814-3.688" transform="translate(-0.664 -1.679)" fill="none" stroke="#583337" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.5" />
                                <path d="M43.587,33.66c.011,1.519.021,2.462.021,2.462" transform="translate(-1.483 -1.145)" fill="none" stroke="#583337" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.5" />
                                <path d="M19.5,43.617S7.376,44.381,7.95,45.049s9.454,1.05,10.218.573,4.87-4.106,1.337-3.629S3.461,44.667,1.647,43.139.691,22.225.787,18.691s-.86-5.3,4.584-6.278S14.157,8.95,17.213,9.045s15.567,2.292,19.578,2.961,5.443.287,5.349,7.354c-.012.8-.018,1.48-.025,2.315" transform="translate(-0.017 -0.308)" fill="none" stroke="#583337" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.5" />
                                <line y1="32.184" x2="0.382" transform="translate(16.814 8.738)" fill="none" stroke="#583337" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.5" />
                                <path d="M39.613,33.468s-12.88-1.05-14.122-1.241-3.434-.287-3.436-5.826.284-6.876,2.385-6.876,14.23,1.814,15.948,2.005,3.394.157,3.394,2.513-.061,4.975-.213,6.917C43.479,32.117,44.162,33.845,39.613,33.468Z" transform="translate(-0.75 -0.664)" fill="none" stroke="#583337" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.5" />
                                <line y2="11.554" transform="translate(24.072 19.816)" fill="none" stroke="#583337" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.5" />
                                <path d="M13.353,27.889c0,3.1-2.08,5.61-4.645,5.61s-4.644-2.512-4.644-5.61,2.08-5.61,4.644-5.61S13.353,24.791,13.353,27.889Z" transform="translate(-0.138 -0.758)" fill="none" stroke="#583337" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.5" />
                            </g>
                        </g>
                    </g>
                </svg>
            </div>
            <p class="mb-0 text-center">Pamiętaj, że dostawa zawsze za 0zł</p>
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
            <a href="/zamowienie/#/"> zamów swoją dietę </a>
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
            <a class="price__order-test-link" href="/zamowienie/#/">Zamów swój zestaw testowy</a>
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