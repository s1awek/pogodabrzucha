<?php

/**
 * Template name: Contact
 * @package WordPress
 * @subpackage astra
 */
?>

<section class="section-contact" id="kontakt">
    <div class="section-contact__header">
        <h2><?php the_field('contakt_section_header'); ?></h2>
    </div>
    <div class="section-contact__subheader">
        <p><?php the_field('subheader_contact'); ?></p>
    </div>
    <div class="section-contact__data">
        <div class="section-contact__data--box1">

            <?php
            $contactImg = get_field('image_contact');
            if (!empty($contactImg)) : ?>
                <div class="section-contact__data-img web-view">
                    <img src=" <?php echo esc_url($contactImg['url']); ?>">
                <?php endif; ?>
                </div>


                <?php
                $contactImgM = get_field('image_contact_mobile');
                if (!empty($contactImgM)) : ?>

                    <div class="section-contact__data-img mobile-view">
                        <img src=" <?php echo esc_url($contactImgM['url']); ?>">
                    <?php endif; ?>
                    <img class="decoration decorationCTM" src="/wp-content/uploads/2022/03/Path-50.png">
                    </div>


                    <div class="section-contact__data-tel section-contact__data-tel--1">
                        <p><?php the_field('first_number_txt') ?></p>
                        <img src="/wp-content/uploads/2022/03/strzalka-tel.png" class="decoration decorationTel1">
                        <a href="tel:<?php the_field('first_number') ?>"> <?php the_field('first_number') ?></a>

                    </div>

                    <div class="section-contact__data-tel">
                        <p><?php the_field('second_number_txt') ?></p>
                        <img src="/wp-content/uploads/2022/03/strzalka-tel.png" class="decoration decorationTel2">
                        <a href="tel:<?php the_field('second_number') ?>"> <?php the_field('second_number') ?></a>

                    </div>

        </div>
        <div class="section-contact__data--box2">
            <div class="section-contact__form">
                <p><?php the_field('text_before_contact_form'); ?></p>
                <?php echo do_shortcode('[contact-form-7 id="34" title="Contact"]'); ?>
                <img class="decoration decorationCT" src="/wp-content/uploads/2022/03/contact.png">

            </div>
        </div>
    </div>
</section>