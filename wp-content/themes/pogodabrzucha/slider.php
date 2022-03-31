<?php

/**
 * Template Name: Slider
 * @package WordPress
 * @subpackage astra
 */
?>
<section class="section-slider">
  <!-- Slideshow container -->
  <div class="slideshow-container">
    <div class="slideshow-container__bg--desktop slideshow-container__bg">
      <?php echo wp_get_attachment_image(get_field('hero_slider_bg'), 'full'); ?>
    </div>
    <div class="slideshow-container__bg--mobile slideshow-container__bg">
      <?php echo wp_get_attachment_image(get_field('hero_slider_bg_mobile'), 'full'); ?>
    </div>
    <!-- Full-width images with number and caption text -->
    <div class="mySlides">
      <div class="slider-info" id="slide1">
        <div class="slider-info__bg">
          <img src="/wp-content/uploads/2022/03/Path-18.png" alt="">
        </div>
        <div class="slider-price-div">
          <p> od <?php the_field('slider_price_1') ?> zł</p>
        </div>
        <h2 class="diet-banner-header fade"><?php the_field('slider_name1') ?></h2>
        <p class="diet-banner-kcal fade">
          <?php the_field('slider_kcal_1-v1'); ?> / <?php the_field('slider_kcal_1-v2'); ?> /
          <?php the_field('slider_kcal_1-v3'); ?> / <?php the_field('slider_kcal_1-v4'); ?> kCal
        </p>
        <p class="diet-banner-desc fade"><?php the_field('slider_desc_1') ?></p>
        <div class="diet-banner-buttons fade"><a class="border-button border-button--white fill-button " href="/diety/dieta-odchudzajaca">więcej info
          </a><a class="gold-button border-button border-button--solid" href="#">zamów</a></div>
      </div>
      <div class="slide-img">
        <?php
        $slideImg1 = get_field('slider_image1');
        if (!empty($slideImg1)) : ?>
          <img src="<?php echo esc_url($slideImg1['url']); ?>">
        <?php endif; ?>
      </div>
      <div class="text"></div>
    </div>
    <div class="mySlides d-none">
      <div class="slider-info " id="slide2">
        <div class="slider-info__bg">
          <img src="/wp-content/uploads/2022/03/green.png" alt="">
        </div>
        <div class="slider-price-div">
          <p> od <?php the_field('slider_price_2') ?> zł</p>
        </div>
        <h2 class="diet-banner-header fade"><?php the_field('slider_name2') ?></h2>
        <p class="diet-banner-kcal">
          <?php the_field('slider_kcal_2-v1'); ?> / <?php the_field('slider_kcal_2-v2'); ?> /
          <?php the_field('slider_kcal_2-v3'); ?> / <?php the_field('slider_kcal_2-v4'); ?> kCal
        </p>
        <p class="diet-banner-desc fade"><?php the_field('slider_desc_2') ?></p>
        <div class="diet-banner-buttons fade"><a class="border-button border-button--white fill-button " href="/diety/dieta-weganska/">więcej info
          </a><a class="gold-button border-button border-button--solid" href="#">zamów</a></div>
      </div>
      <div class="slide-img">
        <?php
        $slideImg2 = get_field('slider_image2');
        if (!empty($slideImg2)) : ?>
          <img class="slider-diet-img" src="<?php echo esc_url($slideImg2['url']); ?>" alt="<?php echo esc_attr($slideImg2['alt']); ?>" />
        <?php endif; ?>
      </div>

    </div>
    <div class="mySlides d-none">
      <div class="slider-info " id="slide3">
        <div class="slider-info__bg">
          <img src="/wp-content/uploads/2022/03/chmurka-duza-slider.png" alt="">
        </div>
        <div class="slider-price-div fade">
          <p> od <?php the_field('slider_price_3') ?> zł</p>
        </div>
        <h2 class="diet-banner-header fade"><?php the_field('slider_name3') ?></h2>
        <p class="diet-banner-kcal">
          <?php the_field('slider_kcal_3-v1'); ?> / <?php the_field('slider_kcal_3-v2'); ?> /
          <?php the_field('slider_kcal_3-v3'); ?> / <?php the_field('slider_kcal_3-v4'); ?> kCal
        </p>
        <p class="diet-banner-desc fade"><?php the_field('slider_desc_3') ?></p>
        <div class="diet-banner-buttons fade"><a class="border-button border-button--white fill-button " href="/diety/dieta-sportowa/">więcej info
          </a><a class="gold-button border-button border-button--solid" href="#">zamów</a></div>
      </div>
      <div class="slide-img">
        <?php
        $slideImg3 = get_field('slider_image3');
        if (!empty($slideImg3)) : ?>
          <img class="slider-diet-img" src="<?php echo esc_url($slideImg3['url']); ?>" alt="<?php echo esc_attr($slideImg3['alt']); ?>" />
        <?php endif; ?>
      </div>

    </div>
    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)"><img src="/wp-content/uploads/2022/03/strzalka-lewo.png"></a>
    <a class="next" onclick="plusSlides(1)"><img src="/wp-content/uploads/2022/03/strzalka-prawo.png"></a>
  </div>




</section>