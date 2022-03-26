<?php
/**
 * Template name: Process
 * @package WordPress
 * @subpackage astra
 */
?>

<section class="section-process ">
    <div class="section-process__header">
        <h2><?php the_field('meet_us_header');?></h2>
    </div>
    <div class="section-process__steps ">
        <div class="section-process__steps-step section-process__steps-step--1">

            <?php
$process1img = get_field('process_first_image');
if (!empty($process1img)): ?>
            <img class="step-img" src="<?php echo esc_url($process1img['url']); ?>"
                alt="<?php echo esc_attr($process1img['alt']); ?>" />
            <?php endif;?>
            <img class="decoration p-decoration1" src="/wp-content/uploads/2022/03/strz1.png">
            <p><?php the_field('process_first_txt');?></p>
        </div>
        <div class=" section-process__steps-step section-process__steps-step--2">

            <?php
$process2img = get_field('process_second_image');
if (!empty($process2img)): ?>
            <img class="step-img" src="<?php echo esc_url($process2img['url']); ?>"
                alt="<?php echo esc_attr($process2img['alt']); ?>" />
            <?php endif;?>
            <img class="decoration p-decoration2" src="/wp-content/uploads/2022/03/strz2.png">
            <p> <?php the_field('process_second_txt');?></p>
        </div>
        <div class="section-process__steps-step section-process__steps-step--3">

            <?php
$process3img = get_field('process_third_image');
if (!empty($process3img)): ?>
            <img class="step-img" src="<?php echo esc_url($process3img['url']); ?>"
                alt="<?php echo esc_attr($process3img['alt']); ?>" />
            <?php endif;?>
            <img class="decoration p-decoration3" src="/wp-content/uploads/2022/03/strz4.png">
            <p><?php the_field('process_third_txt');?></p>
        </div>
        <div class="section-process__steps-step section-process__steps-step--4">

            <?php
$process4img = get_field('process_fourth_image');
if (!empty($process4img)): ?>
            <img class="step-img" src="<?php echo esc_url($process4img['url']); ?>"
                alt="<?php echo esc_attr($process4img['alt']); ?>" />
            <?php endif;?>
            <img class="decoration p-decoration4" src="/wp-content/uploads/2022/03/strz2.png">
            <p><?php the_field('process_fourth_txt');?></p>
        </div>
        <div class="section-process__steps-step section-process__steps-step--5">

            <?php
$process5img = get_field('process_fifth_image');
if (!empty($process5img)): ?>
            <img class="step-img" src="<?php echo esc_url($process5img['url']); ?>"
                alt="<?php echo esc_attr($process5img['alt']); ?>" />
            <?php endif;?>

            <p><?php the_field('process_fifth_txt');?></p>
        </div>

    </div>
    <div class="section-process__steps--mobile">
        <div class="section-process__steps--mobile-step">
            <?php
$process1Mimg = get_field('process_first_image_mobile');
if (!empty($process1Mimg)): ?>
            <img class="step-img" src="<?php echo esc_url($process1Mimg['url']); ?>"
                alt="<?php echo esc_attr($process1Mimg['alt']); ?>" />
            <?php endif;?>
            <p><?php the_field('process_first_txt');?></p>

        </div>
        <div class="section-process__steps--mobile-step">
            <img class="decoration decorationStM2" src="/wp-content/uploads/2022/03/Path-43.png">
            <?php
$process2Mimg = get_field('process_second_image_mobile');
if (!empty($process2Mimg)): ?>
            <img class="step-img" src="<?php echo esc_url($process2Mimg['url']); ?>"
                alt="<?php echo esc_attr($process2Mimg['alt']); ?>" />
            <?php endif;?>
            <p><?php the_field('process_second_txt');?></p>

        </div>
        <div class="section-process__steps--mobile-step">
            <?php
$process3Mimg = get_field('process_third_image_mobile');
if (!empty($process1Mimg)): ?>
            <img class="step-img" src="<?php echo esc_url($process3Mimg['url']); ?>"
                alt="<?php echo esc_attr($process3Mimg['alt']); ?>" />
            <?php endif;?>
            <p><?php the_field('process_third_txt');?></p>

        </div>
        <div class="section-process__steps--mobile-step">
            <?php
$process4Mimg = get_field('process_fourth_image_mobile');
if (!empty($process4Mimg)): ?>
            <img class="step-img" src="<?php echo esc_url($process4Mimg['url']); ?>"
                alt="<?php echo esc_attr($process4Mimg['alt']); ?>" />
            <?php endif;?>
            <p><?php the_field('process_fourth_txt');?></p>

        </div>
        <div class="section-process__steps--mobile-step">
            <img class="decoration decorationStM2" src="/wp-content/uploads/2022/03/Path-59.png">
            <?php
$process5Mimg = get_field('process_fifth_image_mobile');
if (!empty($process5Mimg)): ?>
            <img class="step-img" src="<?php echo esc_url($process5Mimg['url']); ?>"
                alt="<?php echo esc_attr($process5Mimg['alt']); ?>" />
            <?php endif;?>
            <p><?php the_field('process_fifth_txt');?></p>

        </div>
    </div>
    <div class="section-process__subheader">
        <?php the_field('process_after');?>
    </div>

</section>