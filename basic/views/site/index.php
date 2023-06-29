<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$lang = Yii::$app->language;
if ($lang == 'ru') {
  $title = 'title_ru';
  $description = 'description_ru';
  $button = 'button_ru';
  $form_title = 'title_ru';
  $form_description = 'description_ru';
  $input_title = 'title_ru';
  $input_subtitle = 'subtitle_ru';
  $name = 'name_ru';
  $textof = 'text_ru';
} else {
  $title = 'title_kk';
  $description = 'description_kk';
  $button = 'button_kk';
  $form_title = 'title_kk';
  $form_description = 'description_kk';
  $input_title = 'title_kk';
  $input_subtitle = 'subtitle_kk';
  $name = 'name_kk';
  $textof = 'text_kk';
}
// var_dump($form)
?>

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero">

  <div class="info d-flex align-items-center">
    <div class="container">
      <div class="row justify-content-center">\
        <?php foreach ($slider as $slider_item) { ?>
          <div class="col-lg-6 text-center">

            <h2 data-aos="fade-down"><?php echo $slider_item->$title ?></h2>
            <p data-aos="fade-up">
              <?php echo $slider_item->$description ?>
            </p>

            <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started"><?php echo $slider_item->$button ?></a>
          </div>
        <?php } ?>

      </div>
    </div>
  </div>

  <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

    <?php foreach ($carouselImg as $carImg) { ?>

      <div class="carousel-item active" style="background-image: url(/uploads/carousel-hero/<?php echo $carImg->name ?>)"></div>

    <?php } ?>

    <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
    </a>

    <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
    </a>

  </div>

</section><!-- End Hero Section -->



<main id="main">

  <!-- ======= Get Started Section ======= -->
  <section id="get-started" class="get-started section-bg">
    <div class="container">

      <div class="row justify-content-between gy-4">

        <?php foreach ($form as $f) { ?>
          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up">
            <div class="content">
              <h3><?php echo $f->$form_title ?></h3>
              <p><?php echo $f->$form_description ?></p>
            </div>
          </div>
        <?php } ?>


        <div class="col-lg-5" data-aos="fade">
          <!-- <form action="forms/quote.php" method="post" class="php-email-form">
              <h3></h3>
              <p></p>
              <div class="row gy-3">

                <div class="col-md-12">
                  <input type="text" name="name" class="form-control" placeholder="Name" required>
                </div>

                <div class="col-md-12 ">
                  <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="phone" placeholder="Phone" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your quote request has been sent successfully. Thank you!</div>

                  <button type="submit">asdas</button>
                </div>

              </div>
            </form> -->

          <?php $form = ActiveForm::begin([
            'fieldConfig' => [
              'template' => "{input}{hint}",
              'options' => [
                'tag' => false
              ],
            ],
            'options' => [
              'class' => 'php-email-form'
            ]
          ]); ?>

          <h3>Форма</h3>
          <p>yii2-itpark</p>
          <div class="row gy-3">
            <div class="col-md-12">
              <?= $form->field($feedback, 'name')->textInput(['maxlength' => true, 'placeholder' => 'имя']) ?>
            </div>
            <div class="col-md-12 ">
              <?= $form->field($feedback, 'email')->textInput(['maxlength' => true, 'placeholder' => 'емайл']) ?>
            </div>
            <div class="col-md-12">
              <?= $form->field($feedback, 'phone')->textInput(['maxlength' => true, 'placeholder' => 'номер'])->label(false) ?>
            </div>
            <div class="col-md-12 ">
              <?= $form->field($feedback, 'message')->textarea(['rows' => 6, 'placeholder' => 'Сообщение...']) ?>
            </div>
            <div class="col-md-12 text-center">

              <?= Html::submitButton(Yii::t('app', 'отправить')) ?>
            </div>
          </div>
          <?php ActiveForm::end(); ?>



        </div><!-- End Quote Form   -->

      </div>

    </div>
  </section><!-- End Get Started Section -->

  <!-- ======= Constructions Section ======= -->
  <section id="constructions" class="constructions">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2><?php echo Yii::t('app', 'construction_title') ?></h2>
        <p><?php echo Yii::t('app', 'construction_subtitle') ?> </p>
      </div>

      <div class="row gy-4">

        <?php foreach ($constructions as $constr) { ?>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url(/uploads/constructions/<?= $constr->image ?>"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title"><?= $constr->$title ?></h4>
                    <p><?= $constr->$textof ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->
        <?php  } ?>

      </div>

    </div>
  </section><!-- End Constructions Section -->



  <!-- ======= Our Projects Section ======= -->
  <section id="projects" class="projects">
    <div class="container" data-aos="fade-up">

      <div class="section-header">

        <h2><?php echo Yii::t('app', 'project_title') ?></h2>
        <p><?php echo Yii::t('app', 'project_subtitle') ?></p>

      </div>
      <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

        <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">All</li>
          <?php foreach ($categories as $category) { ?>
            <li data-filter=".filter-<?= $category->id ?>"><?= $category->$name ?></li>
          <?php } ?>
        </ul><!-- End Projects Filters -->

        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <?php foreach ($item as $it) { ?>
            <div class="col-lg-4 col-md-6 portfolio-item filter-<?= $it->category_id ?>">
              <div class="portfolio-content h-100">
                <img src="/uploads/ourProjects/<?= $it->bgimg ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Remodeling 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="/Construction/assets/img/projects/remodeling-1.jpg" title="Remodeling 1" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->
          <?php } ?>


        </div><!-- End Projects Container -->

      </div>

    </div>
  </section><!-- End Our Projects Section -->