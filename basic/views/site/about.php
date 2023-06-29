<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;


$lang = Yii::$app->language;
if ($lang == 'ru') {
  $text = 'text_ru';
  $quote = 'quote_ru';
} else {
  $text = 'text_kk';
  $quote = 'quote_kk';
}

?>
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center" style="background-image: url('/Construction/assets/img/breadcrumbs-bg.jpg')">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2><?php echo Yii::t('app', 'About') ?></h2>
      <ol>
        <li><a href="/site/index"><?php echo Yii::t('app', 'Home') ?></a></li>
        <li><?php echo Yii::t('app', 'About') ?></li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="row position-relative">
        <?php foreach ($hero_image as $heroImg) { ?>
          <div class="col-lg-7 about-img" style="background-image: url(/uploads/about-hero/<?php echo $heroImg->image ?>)"></div>
        <?php } ?>

        <div class="col-lg-7">
          <h2><?php echo Yii::t('app', 'title1') ?></h2>
          <div class="our-story">
            <h3><?php echo Yii::t('app', 'title2') ?></h3>
            <p>
              <?php echo Yii::t('app', 'text1') ?>< /p>
                <ul>
                  <li><i class="bi bi-check-circle"></i> <span><?php echo Yii::t('app', 'subtitle1') ?></span></li>
                  <li><i class="bi bi-check-circle"></i> <span><?php echo Yii::t('app', 'subtitle1') ?></span></li>
                  <li><i class="bi bi-check-circle"></i> <span><?php echo Yii::t('app', 'subtitle1') ?></span></li>
                </ul>
                <p><?php echo Yii::t('app', 'text2') ?></p>

                <div class="watch-video d-flex align-items-center position-relative">
                  <i class="bi bi-play-circle"></i>
                  <!-- <a href="/uploads/about-story/" class="glightbox stretched-link">Watch Video</a> -->
                </div>
          </div>

        </div>



      </div>

    </div>
  </section>
  <!-- End About Section -->

  <!-- ======= Stats Counter Section ======= -->
  <section id="stats-counter" class="stats-counter section-bg">
    <div class="container">

      <div class="row gy-4">

        <?php foreach ($stats as $stat) : ?>
          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="<?= $stat->icon ?>"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="<?= $stat->number ?>" data-purecounter-duration="1" class="purecounter"></span>
                <p><?= $stat->$text ?></p>
              </div>
            </div>
          </div><!-- End Stats Item -->
        <?php endforeach; ?>

      </div>

    </div>
  </section><!-- End Stats Counter Section -->




  <!-- ======= Our Team Section ======= -->
  <section id="team" class="team">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2><?php echo Yii::t('app', 'team_title') ?></h2>
        <p><?php echo Yii::t('app', 'team_subtitle') ?></p>
      </div>

      <div class="row gy-5">
        <?php foreach ($team as $tea) { ?>

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
            <div class="member-img">
              <img src="/uploads/about-team/<?= $tea->image ?>" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="<?= $tea->twiiter ?>"></i></a>
                <a href="#"><i class="<?= $tea->facebook ?>"></i></a>
                <a href="#"><i class="<?= $tea->instagram    ?>"></i></a>
                <a href="#"><i class="<?= $tea->linkedin ?>"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4><?= $tea->name_ru ?></h4>
              <span><?= $tea->$quote ?></span>
            </div>
          </div><!-- End Team Member -->

        <?php } ?>



      </div>

    </div>
  </section><!-- End Our Team Section -->

  <!-- ======= Testimonials Section ======= -->


</main><!-- End #main -->