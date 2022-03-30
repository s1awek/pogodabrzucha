<?php

/**
 * Template Name: Landing Page
 * @package WordPress
 * @subpackage astra
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

get_header(); ?>

<section class="section-lp">
  <section class="section-lp-header">
    <?php
    $header_img = get_field('lp_header_image');
    $text_img = get_field('lp_text_background_image');
    if ($header_img) : ?>
      <div class="lp-header__bg-wrap">
        <?php echo wp_get_attachment_image($header_img, 'full') ?>
      </div>
    <?php endif; ?>
    <div class="lp-header__text-wrap">
      <?php if ($text_img) : ?>
        <div class="lp-header__text-img-wrap">
          <img src="<?php echo wp_get_attachment_image_src($text_img, 'full')[0] ?>" alt="">
        </div>
      <?php endif ?>
      <div class="lp-header__text-inner">
        <h1 class="lp-header__title"><?php the_field('lp_title') ?></h1>
        <p class="lp-header__text"><?php the_field('lp_text') ?> </p>
      </div>

    </div>
  </section>
  <section class="section-contact-from section-contact">
    <div class="section-contact__data">
      <div class="decor-wrap">
        <img class="decoration decorationCT" src="/wp-content/uploads/2022/03/contact.svg">
      </div>
      <div class="section-contact__data--box2">
        <div class="section-contact__form">
          <h2><?php the_field('lp_form_title'); ?></h2>
          <?php echo do_shortcode('[contact-form-7 id="774" title="LP Form"]'); ?>

        </div>
      </div>
    </div>
  </section>
  <section class="section-contact-social">
    <h2><?php the_field('lp_contact_title') ?></h2>
    <div class="section-contact-social__inner">
      <div class="contact-social-box">
        <div class="contact-social-box__big-icon">
          <img src="<?php the_field('social_large_icon') ?>" alt="">
        </div>
        <div class="contact-social-box__social-inner">
          <?php if (have_rows('social_icons')) :
            while (have_rows('social_icons')) : the_row();
          ?>
              <?php
              $icon = get_sub_field('icon');
              $link = get_sub_field('link');
              ?>
              <a href="<?php echo $link['url'] ?>" class="contact-social-box__link">
                <img src="<?php echo $icon ?>" alt="">
              </a>
          <?php
            endwhile;
          endif;
          ?>
        </div>
      </div>
    </div>
  </section>
  <section class="section-benefits">
    <h2><?php the_field('benefits_title') ?></h2>
    <div class="benefits">
      <?php if (have_rows('benefits_box')) :
        while (have_rows('benefits_box')) : the_row();
      ?>
          <?php
          $icon = get_sub_field('icon');
          $text = get_sub_field('text');
          ?>
          <div class="benefits__box">
            <img src="<?php echo $icon ?>" alt="">
            <p><?php echo $text ?></p>
          </div>
      <?php
        endwhile;
      endif;
      ?>
    </div>
  </section>
</section>

<?php get_footer(); ?>