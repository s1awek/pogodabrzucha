<?php

/**
 * Template name: Landing Page
 * @package WordPress
 * @subpackage astra
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header(); ?>

<section classs="section-lp">
    <div class="lp-header">
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
                <?php echo wp_get_attachment_image($text_img, 'full') ?>
            <?php endif ?>
            <h1 class="lp-header__title"><?php the_field('lp_title') ?></h1>
            <p class="lp-header__text"><?php the_field('lp_text') ?> </p>
        </div>
    </div>

</section>
<?php get_footer(); ?>