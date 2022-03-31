<?php

/**
 * Template Name: Home
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

get_header(); ?>


<?php include 'slider.php' ?>
<section class="section-reviews-slider">
  <?php
  $average_rating = 0;
  $counter = 1;
  if (have_rows('reviews_slider')) : ?>
    <?php while (have_rows('reviews_slider')) : the_row();
      $rating = get_sub_field('rating');
      $average_rating += $rating;
      $counter++;
    endwhile; ?>
  <?php
  endif;
  $average_rating = round(($average_rating / $counter), 1);
  function getStars($rating)
  {
    for ($i = 1; $i <= 5; $i++) {
      $full_stars = floor($rating);
      $half_star = ($full_stars < $rating);
      if ($i <= $full_stars) {
        echo '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="35.57" height="31.89" viewBox="0 0 35.57 31.89"><defs><radialGradient id="radial-gradient" cx="0.345" cy="0.383" r="1.209" gradientTransform="matrix(0.18, 0.984, -0.87, 0.159, 0.616, -0.017)" gradientUnits="objectBoundingBox"><stop offset="0" stop-color="#ebbb1a"/><stop offset="1" stop-color="#cc7116"/></radialGradient></defs><path id="Polygon_4" data-name="Polygon 4" d="M15.912,5a2,2,0,0,1,3.745,0l2.1,5.6a2,2,0,0,0,1.825,1.3l6.052.146a2,2,0,0,1,1.123,3.621l-4.607,3.328a2,2,0,0,0-.736,2.222l1.693,5.375a2,2,0,0,1-3,2.279l-5.236-3.4a2,2,0,0,0-2.177,0l-5.236,3.4a2,2,0,0,1-3-2.279l1.693-5.375a2,2,0,0,0-.736-2.222L4.814,15.659a2,2,0,0,1,1.123-3.621l6.052-.146a2,2,0,0,0,1.825-1.3Z" fill="url(#radial-gradient)"/></svg>';
      } else if ($half_star && $i == $full_stars + 1) {
        echo '<svg id="Group_131" data-name="Group 131" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="35.57" height="31.89" viewBox="0 0 35.57 31.89"> <defs><radialGradient id="radial-gradient" cx="0.345" cy="0.383" r="1.209" gradientTransform="matrix(0.18, 0.984, -0.87, 0.159, 0.616, -0.017)" gradientUnits="objectBoundingBox"><stop offset="0" stop-color="#ebbb1a"/><stop offset="1" stop-color="#cc7116"/></radialGradient></defs><path id="Subtraction_1" data-name="Subtraction 1" d="M5.484,24.608a2.035,2.035,0,0,1-1.625-.832,1.94,1.94,0,0,1-.29-1.763L5.232,16.6a2,2,0,0,0-.722-2.2L-.062,11.019a2,2,0,0,1,1.14-3.606l5.9-.146A1.991,1.991,0,0,0,8.81,5.954L10.824.447A1.956,1.956,0,0,1,12.7-.866V20.6H12.7a1.982,1.982,0,0,0-1.1.334l-5.008,3.33A1.993,1.993,0,0,1,5.484,24.608Z" transform="translate(5.029 4.605)" fill="url(#radial-gradient)"/><g id="Polygon_6" data-name="Polygon 6" transform="translate(0 0)" fill="none"><path d="M15.912,5a2,2,0,0,1,3.745,0l2.1,5.6a2,2,0,0,0,1.825,1.3l6.052.146a2,2,0,0,1,1.123,3.621l-4.607,3.328a2,2,0,0,0-.736,2.222l1.693,5.375a2,2,0,0,1-3,2.279l-5.236-3.4a2,2,0,0,0-2.177,0l-5.236,3.4a2,2,0,0,1-3-2.279l1.693-5.375a2,2,0,0,0-.736-2.222L4.814,15.659a2,2,0,0,1,1.123-3.621l6.052-.146a2,2,0,0,0,1.825-1.3Z" stroke="none"/><path d="M 17.78499603271484 4.697206497192383 C 17.62241554260254 4.697206497192383 17.07438659667969 4.74400520324707 16.84863662719727 5.346166610717773 L 14.74927520751953 10.9457950592041 C 14.31720542907715 12.09829521179199 13.24294662475586 12.86213493347168 12.01249694824219 12.89178657531738 L 5.960786819458008 13.03764533996582 C 5.29438591003418 13.0537052154541 5.079696655273438 13.58014488220215 5.029766082763672 13.7411060333252 C 4.979846954345703 13.90206527709961 4.858936309814453 14.45759582519531 5.399286270141602 14.84795570373535 L 10.00640678405762 18.17625617980957 C 11.05612564086914 18.93461608886719 11.50004577636719 20.2740364074707 11.11105537414551 21.50923538208008 L 9.418306350708008 26.88414573669434 C 9.291585922241211 27.28649520874023 9.421596527099609 27.58446502685547 9.552976608276367 27.76358604431152 C 9.747035980224609 28.02814483642578 10.06202697753906 28.19249534606934 10.37504577636719 28.19249534606934 C 10.56134605407715 28.19249534606934 10.74347686767578 28.1356258392334 10.9163761138916 28.02345657348633 L 16.15223693847656 24.62668609619141 C 16.63953590393066 24.310546875 17.20413589477539 24.14344596862793 17.78499603271484 24.14344596862793 C 18.3658561706543 24.14344596862793 18.93044662475586 24.310546875 19.41774559020996 24.62668609619141 L 24.65362548828125 28.02345657348633 C 24.82651519775391 28.1356258392334 25.00863647460938 28.19249534606934 25.1949348449707 28.19249534606934 C 25.50789642333984 28.19249534606934 25.8228759765625 28.02812576293945 26.0169563293457 27.76353454589844 C 26.14834594726562 27.58440589904785 26.27837562561035 27.28642654418945 26.15167617797852 26.88414573669434 L 24.45893478393555 21.50923538208008 C 24.06992721557617 20.2740364074707 24.51385498046875 18.93461608886719 25.5635871887207 18.17626571655273 L 30.17070579528809 14.84795570373535 C 30.71104621887207 14.45759582519531 30.59014511108398 13.90207481384277 30.54021644592285 13.74111557006836 C 30.49029541015625 13.58014488220215 30.27560615539551 13.0537052154541 29.60919570922852 13.03764533996582 L 23.55748558044434 12.89178657531738 C 22.32703590393066 12.86212539672852 21.25278472900391 12.09827613830566 20.82070541381836 10.9458065032959 L 18.72134590148926 5.346155166625977 C 18.49559593200684 4.74400520324707 17.94757652282715 4.697206497192383 17.78499603271484 4.697206497192383 M 17.78499794006348 3.697210311889648 C 18.55915641784668 3.697210311889648 19.33331108093262 4.129840850830078 19.65770721435547 4.995105743408203 L 21.75706481933594 10.59475517272949 C 22.04357528686523 11.35895538330078 22.76568603515625 11.87240600585938 23.58158493041992 11.89207649230957 L 29.63329696655273 12.03793525695801 C 31.54847717285156 12.0840950012207 32.3092041015625 14.53670501708984 30.75630569458008 15.65855598449707 L 26.14918518066406 18.98686599731445 C 25.45063591003418 19.49151611328125 25.15388488769531 20.38687515258789 25.41275596618652 21.20884704589844 L 27.10549545288086 26.58375549316406 C 27.66876602172852 28.37227630615234 25.68243789672852 29.88291549682617 24.10936737060547 28.86237525939941 L 18.87349510192871 25.46560668945312 C 18.21139907836914 25.03606796264648 17.35859680175781 25.03606414794922 16.69648551940918 25.46560668945312 L 11.46062660217285 28.86237525939941 C 9.887544631958008 29.88291549682617 7.901224136352539 28.37227630615234 8.464485168457031 26.58375549316406 L 10.15723609924316 21.20884704589844 C 10.41609573364258 20.38687515258789 10.11934661865234 19.49151611328125 9.420795440673828 18.98685455322266 L 4.813686370849609 15.65855598449707 C 3.260784149169922 14.53670501708984 4.021505355834961 12.0840950012207 5.936685562133789 12.03793525695801 L 11.98839569091797 11.89207649230957 C 12.80430603027344 11.87241554260254 13.52641677856445 11.35895538330078 13.81291580200195 10.59475517272949 L 15.91227531433105 4.995115280151367 C 16.23667526245117 4.129846572875977 17.01083946228027 3.697210311889648 17.78499794006348 3.697210311889648 Z" stroke="none" fill="#e8b51a"/></g></svg>';
      } else {
        echo '<svg xmlns="http://www.w3.org/2000/svg" width="35.57" height="31.89" viewBox="0 0 35.57 31.89"> <g id="Polygon_6" data-name="Polygon 6" fill="none"><path d="M15.912,5a2,2,0,0,1,3.745,0l2.1,5.6a2,2,0,0,0,1.825,1.3l6.052.146a2,2,0,0,1,1.123,3.621l-4.607,3.328a2,2,0,0,0-.736,2.222l1.693,5.375a2,2,0,0,1-3,2.279l-5.236-3.4a2,2,0,0,0-2.177,0l-5.236,3.4a2,2,0,0,1-3-2.279l1.693-5.375a2,2,0,0,0-.736-2.222L4.814,15.659a2,2,0,0,1,1.123-3.621l6.052-.146a2,2,0,0,0,1.825-1.3Z" stroke="none"/> <path d="M 17.78499603271484 4.697206497192383 C 17.62241554260254 4.697206497192383 17.07438659667969 4.74400520324707 16.84863662719727 5.346166610717773 L 14.74927520751953 10.9457950592041 C 14.31720542907715 12.09829521179199 13.24294662475586 12.86213493347168 12.01249694824219 12.89178657531738 L 5.960786819458008 13.03764533996582 C 5.29438591003418 13.0537052154541 5.079696655273438 13.58014488220215 5.029766082763672 13.7411060333252 C 4.979846954345703 13.90206527709961 4.858936309814453 14.45759582519531 5.399286270141602 14.84795570373535 L 10.00640678405762 18.17625617980957 C 11.05612564086914 18.93461608886719 11.50004577636719 20.2740364074707 11.11105537414551 21.50923538208008 L 9.418306350708008 26.88414573669434 C 9.291585922241211 27.28649520874023 9.421596527099609 27.58446502685547 9.552976608276367 27.76358604431152 C 9.747035980224609 28.02814483642578 10.06202697753906 28.19249534606934 10.37504577636719 28.19249534606934 C 10.56134605407715 28.19249534606934 10.74347686767578 28.1356258392334 10.9163761138916 28.02345657348633 L 16.15223693847656 24.62668609619141 C 16.63953590393066 24.310546875 17.20413589477539 24.14344596862793 17.78499603271484 24.14344596862793 C 18.3658561706543 24.14344596862793 18.93044662475586 24.310546875 19.41774559020996 24.62668609619141 L 24.65362548828125 28.02345657348633 C 24.82651519775391 28.1356258392334 25.00863647460938 28.19249534606934 25.1949348449707 28.19249534606934 C 25.50789642333984 28.19249534606934 25.8228759765625 28.02812576293945 26.0169563293457 27.76353454589844 C 26.14834594726562 27.58440589904785 26.27837562561035 27.28642654418945 26.15167617797852 26.88414573669434 L 24.45893478393555 21.50923538208008 C 24.06992721557617 20.2740364074707 24.51385498046875 18.93461608886719 25.5635871887207 18.17626571655273 L 30.17070579528809 14.84795570373535 C 30.71104621887207 14.45759582519531 30.59014511108398 13.90207481384277 30.54021644592285 13.74111557006836 C 30.49029541015625 13.58014488220215 30.27560615539551 13.0537052154541 29.60919570922852 13.03764533996582 L 23.55748558044434 12.89178657531738 C 22.32703590393066 12.86212539672852 21.25278472900391 12.09827613830566 20.82070541381836 10.9458065032959 L 18.72134590148926 5.346155166625977 C 18.49559593200684 4.74400520324707 17.94757652282715 4.697206497192383 17.78499603271484 4.697206497192383 M 17.78499794006348 3.697210311889648 C 18.55915641784668 3.697210311889648 19.33331108093262 4.129840850830078 19.65770721435547 4.995105743408203 L 21.75706481933594 10.59475517272949 C 22.04357528686523 11.35895538330078 22.76568603515625 11.87240600585938 23.58158493041992 11.89207649230957 L 29.63329696655273 12.03793525695801 C 31.54847717285156 12.0840950012207 32.3092041015625 14.53670501708984 30.75630569458008 15.65855598449707 L 26.14918518066406 18.98686599731445 C 25.45063591003418 19.49151611328125 25.15388488769531 20.38687515258789 25.41275596618652 21.20884704589844 L 27.10549545288086 26.58375549316406 C 27.66876602172852 28.37227630615234 25.68243789672852 29.88291549682617 24.10936737060547 28.86237525939941 L 18.87349510192871 25.46560668945312 C 18.21139907836914 25.03606796264648 17.35859680175781 25.03606414794922 16.69648551940918 25.46560668945312 L 11.46062660217285 28.86237525939941 C 9.887544631958008 29.88291549682617 7.901224136352539 28.37227630615234 8.464485168457031 26.58375549316406 L 10.15723609924316 21.20884704589844 C 10.41609573364258 20.38687515258789 10.11934661865234 19.49151611328125 9.420795440673828 18.98685455322266 L 4.813686370849609 15.65855598449707 C 3.260784149169922 14.53670501708984 4.021505355834961 12.0840950012207 5.936685562133789 12.03793525695801 L 11.98839569091797 11.89207649230957 C 12.80430603027344 11.87241554260254 13.52641677856445 11.35895538330078 13.81291580200195 10.59475517272949 L 15.91227531433105 4.995115280151367 C 16.23667526245117 4.129846572875977 17.01083946228027 3.697210311889648 17.78499794006348 3.697210311889648 Z" stroke="none" fill="#e8b51a"/></g></svg>';
      }
    }
  }
  ?>
  <div class="section-reviews-slider__inner">
    <div class="section-reviews-slider__average">
      <div class="average-review">
        <h3 class="text-center"><?php the_field('average_rating_text') ?></h3>
        <p class="mb-0"><?php echo $average_rating ?> / 5</p>
        <div class="average-review__stars">
          <?php
          getStars($average_rating);
          ?>
        </div>
      </div>
    </div>

    <?php if (have_rows('reviews_slider')) : ?>
      <div class="review-slider-wrap">
        <div class="splide review-slider">
          <div class="splide__arrows">
            <button class="splide__arrow splide__arrow--prev">
              <svg id="Component_17_13" data-name="Component 17 – 13" xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44">
                <g id="Ellipse_38" data-name="Ellipse 38" fill="none" stroke="#5e3136" stroke-width="1">
                  <circle cx="22" cy="22" r="22" stroke="none" />
                  <circle cx="22" cy="22" r="21.5" fill="none" />
                </g>
                <path id="Path_20" data-name="Path 20" d="M-20778.5-9015.661v12.057h12.057" transform="translate(-8299.104 -21037.127) rotate(-135)" fill="none" stroke="#5e3136" stroke-width="2" />
              </svg>

            </button>
            <button class="splide__arrow splide__arrow--next">
              <svg id="Component_17_13" data-name="Component 17 – 13" xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44">
                <g id="Ellipse_38" data-name="Ellipse 38" fill="none" stroke="#5e3136" stroke-width="1">
                  <circle cx="22" cy="22" r="22" stroke="none" />
                  <circle cx="22" cy="22" r="21.5" fill="none" />
                </g>
                <path id="Path_20" data-name="Path 20" d="M-20778.5-9015.661v12.057h12.057" transform="translate(-8299.104 -21037.127) rotate(-135)" fill="none" stroke="#5e3136" stroke-width="2" />
              </svg>

            </button>
          </div>
          <div class="splide__track">
            <ul class="splide__list">
              <?php while (have_rows('reviews_slider')) : the_row();
              ?>
                <?php
                $rating = get_sub_field('rating');
                $text = get_sub_field('text');
                $name = get_sub_field('name');
                ?>
                <li class="splide__slide">
                  <div class="review-slider__rating-wrap">
                    <p class="mb-0"><?php echo $rating ?> / 5</p>
                    <div class="review-slider__stars-wrap">
                      <?php getStars($rating); ?>
                    </div>
                  </div>
                  <p class="review-slider__text"><?php echo $text ?></p>
                  <p class="review-slider__name mb-0"><?php echo $name ?></p>
                </li>
              <?php
              endwhile; ?>
            </ul>
          </div>
        </div>
      </div>
    <?php
    endif;
    ?>
  </div>
</section>


<?php include 'delivery.php' ?>

<section class="section-started">
  <div class="section-started__inner">
    <div class="section-started__header">
      <h2><?php the_field('how_it_starts_header'); ?></h2>
      <img src="/wp-content/uploads/2022/03/burger-jablko.png" class="decoration decoration5">
    </div>
    <img src="/wp-content/uploads/2022/03/start3.png" class="decoration decoration3">
    <img src="/wp-content/uploads/2022/03/start2.png" class="decoration decoration4">

    <div class="section-started__txt">
      <div class="col col--1">
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</p>
      </div>
      <div class="col col--2">
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum</p>
      </div>
    </div>
  </div>


</section>

<section class="section-features">
  <img class="decoration1 decoration" src="/wp-content/uploads/2022/03/profit-left.png">
  <img class="decoration2 decoration" src="/wp-content/uploads/2022/03/profit-right.png">
  <div class="section-features__before-header">
    <p><?php the_field('before_header_profits'); ?></p>
  </div>

  <div class="section-features__header">
    <h2><?php the_field('profits_header'); ?></h2>
  </div>
  <div class="section-features__subheader">
    <p><?php the_field('subheader_profits'); ?></p>
  </div>

  <div class="section-features__profits">
    <div class="section-features__profit section-features__profit--1">
      <?php
      $profit1img = get_field('profits_first_image');
      if (!empty($profit1img)) : ?>
        <div class="section-features__img-box">
          <img src="<?php echo esc_url($profit1img['url']); ?>">
        <?php endif; ?>
        </div>
        <?php
        $profit1imgM = get_field('profits_first_image_mobile');
        if (!empty($profit1imgM)) : ?>
          <div class="section-features__img-box--mobile">
            <img src="<?php echo esc_url($profit1imgM['url']); ?>">
          <?php endif; ?>
          </div>
          <p><?php the_field('profits_first_txt'); ?></p>
    </div>
    <div class="section-features__profit">
      <?php
      $profit2img = get_field('profits_second_image');
      if (!empty($profit2img)) : ?>

        <div class="section-features__img-box">
          <img src=" <?php echo esc_url($profit2img['url']); ?>">
        <?php endif; ?>
        </div>
        <?php
        $profit1imgM2 = get_field('profits_second_image_mobile');
        if (!empty($profit1imgM2)) : ?>
          <div class="section-features__img-box--mobile">
            <img src="<?php echo esc_url($profit1imgM2['url']); ?>">
          <?php endif; ?>
          </div>

          <p> <?php the_field('profits_second_txt'); ?></p>
    </div>
    <div class="section-features__profit">

      <?php
      $profit3img = get_field('profits_third_image');
      if (!empty($profit3img)) : ?>

        <div class="section-features__img-box">
          <img src=" <?php echo esc_url($profit3img['url']); ?>">
        <?php endif; ?>
        </div>
        <?php
        $profit1imgM3 = get_field('profits_third_image_mobile');
        if (!empty($profit1imgM3)) : ?>
          <div class="section-features__img-box--mobile">
            <img src="<?php echo esc_url($profit1imgM3['url']); ?>">
          <?php endif; ?>
          </div>
          <p> <?php the_field('profits_third_txt'); ?></p>
    </div>
    <div class="section-features__profit">

      <?php
      $profit4img = get_field('profits_fourth_image');
      if (!empty($profit4img)) : ?>

        <div class="section-features__img-box">
          <img src="<?php echo esc_url($profit4img['url']); ?>">
        <?php endif; ?>
        </div>
        <?php
        $profit1imgM4 = get_field('profits_fourth_image_mobile');
        if (!empty($profit1imgM4)) : ?>
          <div class="section-features__img-box--mobile">
            <img src="<?php echo esc_url($profit1imgM4['url']); ?>">
          <?php endif; ?>
          </div>
          <p> <?php the_field('profits_fourth_txt'); ?></p>
    </div>
  </div>

</section>

<?php include 'process.php' ?>
<?php include 'contact.php' ?>


<?php get_footer(); ?>