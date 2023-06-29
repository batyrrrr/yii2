<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\TempAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

$lang = Yii::$app->language;

if ($lang == 'ru') {
	$lang_now = 'RU';
} else {
	$lang_now = 'KK';
}

TempAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
	<title><?= Html::encode($this->title) ?></title>
	<?php $this->head() ?>
</head>

<body>
	<?php $this->beginBody() ?>
	<!-- ======= Header ======= -->
	<header id="header" class="header d-flex align-items-center">
		<div class="container-fluid container-xl d-flex align-items-center justify-content-between">

			<a href="/site/index" class="logo d-flex align-items-center">
				<!-- Uncomment the line below if you also wish to use an image logo -->
				<!-- <img src="assets/img/logo.png" alt=""> -->
				<h1>UpConstruction<span>.</span></h1>
			</a>

			<i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
			<i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
			<nav id="navbar" class="navbar">
				<ul>
					<li><a href="/site/index" class="active"><?php echo Yii::t('app', 'Home') ?></a></li>
					<li><a href="/site/about"><?php echo Yii::t('app', 'About') ?></a></li>
					<li><a href="/site/services"><?php echo Yii::t('app', 'Services') ?></a></li>
					<li class="dropdown"><a href="#"><span><?= $lang_now ?></span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
						<ul>
							<li>
								<?php echo Html::a('KK', array_merge(\Yii::$app->request->get(), [\Yii::$app->controller->route, 'language' => 'kk'])) ?>
							</li>
							<?php echo Html::a('RU', array_merge(\Yii::$app->request->get(), [\Yii::$app->controller->route, 'language' => 'ru'])) ?>
					</li>
					<!-- <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i
                    class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li> -->
					<!-- <li><a href="#">KK</a></li> -->
				</ul>
				</li>
				<li><a href="/site/contact"><?php echo Yii::t('app', 'Contact') ?></a></li>
				</ul>
			</nav><!-- .navbar -->

		</div>
	</header><!-- End Header -->



	<?= $content ?>

	<footer id="footer" class="footer">

		<div class="footer-content position-relative">
			<div class="container">
				<div class="row">

					<div class="col-lg-4 col-md-6">
						<div class="footer-info">
							<h3>UpConstruction</h3>
							<p>
								A108 Adam Street <br>
								NY 535022, USA<br><br>
								<strong><?php echo Yii::t('app', 'Phone') ?></strong> +1 5589 55488 55<br>
								<strong>Email:</strong> info@example.com<br>
							</p>
							<div class="social-links d-flex mt-3">
								<a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></a>
								<a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
								<a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
								<a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a>
							</div>
						</div>
					</div><!-- End footer info column-->

					<div class="col-lg-2 col-md-3 footer-links">
						<h4><?php echo Yii::t('app', 'Pages') ?></h4>
						<ul>
							<li><a href="#"><?php echo Yii::t('app', 'Home') ?></a></li>
							<li><a href="#"><?php echo Yii::t('app', 'About') ?></a></li>
							<li><a href="#"><?php echo Yii::t('app', 'Policy') ?></a></li>
						</ul>
					</div><!-- End footer links column-->

					<div class="col-lg-2 col-md-3 footer-links">
						<h4><?php echo Yii::t('app', 'Services') ?></h4>
						<ul>
							<li><a href="#">Веб дизайн</a></li>
							<li><a href="#">Веб разработка</a></li>
							<li><a href="#"><?php echo Yii::t('app', 'Management') ?></a></li>
							<li><a href="#">Маркетинг</a></li>
							<li><a href="#">Графический дизайн</a></li>
						</ul>
					</div><!-- End footer links column-->


				</div>
			</div>
		</div>

		<div class="footer-legal text-center position-relative">
			<div class="container">
				<div class="copyright">
					&copy; Copyright <strong><span>UpConstruction</span></strong>. All Rights Reserved
				</div>
				<div class="credits">
					<!-- All the links in the footer should remain intact. -->
					<!-- You can delete the links only if you purchased the pro version. -->
					<!-- Licensing information: https://bootstrapmade.com/license/ -->
					<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/ -->
					Designed by <a href="#">Batyr B.</a>
				</div>
			</div>
		</div>

	</footer>

	<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>