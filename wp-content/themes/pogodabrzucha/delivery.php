<?php

/**
 * Template Name: Delivery
 * @package WordPress
 * @subpackage astra
 */
?>

<section class="section-delivery">
  <div class="section-delivery__box">
    <div class="section-delivery__header">
      <h2><?php the_field('delivery_header'); ?></h2>
    </div>
    <div class="section-delivery__subheader">
      <p><?php the_field('delivery_subheader'); ?></p>
    </div>
  </div>
  <!--delivery form-->
  <section class="delivery__form">
    <div class="container">

      <form class="delivery__form-form" id="post-codes" method="post">
        <div class="delivery__form-inputs">
          <div class="delivery__inner">
            <label for="postal">Kod pocztowy</label>
            <input type="text" name="postal" id="postal" pattern="^\d{2}-\d{3}$" placeholder="00-000" value="" required />
            <div class="inputError" id="errCode">Niepoprawny kod</div>
          </div>
          <div class="delivery__inner">
            <label for=" city">Nazwa miejscowości</label>
            <input type="text" name="city" id="city" placeholder="np. Łódź" required />
            <div class="inputError" id="errCity">Niepoprawne miasto</div>
          </div>


          <div class="submit-button submit-button-v2">
            <img class="decoration decorationP1" src="/wp-content/uploads/2022/03/chmurka-medium-gdzie.png">
            <div class="submit-button__row">
              <button type="button" class="delivery__form-button button button--primary" onclick="getVal()">
                sprawdź
              </button>
              <img class="decoration decorationP2" src="/wp-content/uploads/2022/03/chmurka-button-gorna.png">
              <img class="decoration decorationP3" src="/wp-content/uploads/2022/03/chmurka-button-dolna-1.png">
            </div>
          </div>
          <!-- <div class="sub-mobile">
            <a type="submit" class="" onclick="getVal()">
              sprawdź
            </a>
          </div> -->

        </div>
      </form>

    </div>
  </section>

  <?php include 'popup.php' ?>

</section>