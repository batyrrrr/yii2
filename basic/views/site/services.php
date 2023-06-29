<?php

$lang = Yii::$app->language;
if ($lang == 'ru') {
  $title = 'title_ru';
  $text = 'text_ru';
  $button_text = 'button_ru';
} else {
  $title = 'title_kk';
  $text = 'text_ru';
  $button_text = 'button_kk';
}

?>


<main id="main">
  <?php foreach ($bg as $bgimg) { ?>
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('/uploads/services/<?= $bgimg->img ?>');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2><?php echo Yii::t('app', 'Services') ?></h2>
        <ol>
          <li><a href="/site/index"><?php echo Yii::t('app', 'Home') ?></a></li>
          <li><?php echo Yii::t('app', 'Services') ?></li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->
  <?php } ?>

  <!-- ======= Services Section ======= -->
  <section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">

      <div class="row gy-4">
        <?php foreach ($services as $service) { ?>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="<?= $service->icon ?>"></i>
              </div>
              <h3><?= $service->$title ?></h3>
              <p><?= $service->$text ?></p>
              <a href="#" class="readmore stretched-link"><?= $service->$button_text ?> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->
        <?php } ?>

      </div>

    </div>
  </section><!-- End Services Section -->


  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2><?php echo Yii::t('app', 'Testimonials_title') ?></h2>
        <p><?php echo Yii::t('app', 'Testimonials_text') ?></p>
      </div>

      <div class="slides-2 swiper">
        <div class="swiper-wrapper">
          <?php foreach ($testiomnials as $te) { ?>

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="/uploads/services/<?= $te->image ?>" class="testimonial-img" alt="">
                  <h3><?= $te->name ?></h3>
                  <h4><?= $te->quote ?></h4>
                  <p> <?= $te->$text ?></p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          <?php } ?>

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Testimonials Section -->

</main><!-- End #main -->