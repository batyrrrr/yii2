<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class TempAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
    "Construction/assets/vendor/bootstrap/css/bootstrap.min.css", 
    "Construction/assets/vendor/bootstrap-icons/bootstrap-icons.css",
    "Construction/assets/vendor/fontawesome-free/css/all.min.css" ,
    "Construction/assets/vendor/aos/aos.css" ,
    "Construction/assets/vendor/glightbox/css/glightbox.min.css",
    "Construction/assets/vendor/swiper/swiper-bundle.min.css" ,
    "Construction/assets/css/main.css" ,
    
    "https://fonts.googleapis.com" ,
    "https://fonts.gstatic.com" ,
    "https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap",
    ];

    
    public $js = [
        // <!-- Vendor JS Files -->

        "Construction/assets/vendor/bootstrap/js/bootstrap.bundle.min.js",
        "Construction/assets/vendor/aos/aos.js",
        "Construction/assets/vendor/glightbox/js/glightbox.min.js",
        "Construction/assets/vendor/isotope-layout/isotope.pkgd.min.js",
        "Construction/assets/vendor/swiper/swiper-bundle.min.js",
        "Construction/assets/vendor/purecounter/purecounter_vanilla.js",
        "Construction/assets/vendor/php-email-form/validate.js",
        // <!-- Template Main JS File -->
        "Construction/assets/js/main.js",
      

    ];
    public $depends = [
        // 'yii\web\YiiAsset',
        // 'yii\bootstrap5\BootstrapAsset'
    ];
}

// <script src="js/jquery.js"></script>
// 	<script src="js/.js"></script>
// 	<script src="js/owl.carousel.min.js"></script>
// 	<script src="js/script.js"></script>

// <link rel="stylesheet" href="css/style.css">
// 	<!------------------------icons------------------------->
// 	<link rel="stylesheet" href="icons/style.css">
// 	<!--  -->
// 	<link rel="stylesheet" href="css/owl.carousel.min.css">
// 	<link rel="stylesheet" href="css/owl.theme.default.min.css">
// 	<!------------------------------------------------->
// 	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
// 		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

//         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
// 		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
// 		crossorigin="anonymous"></script>
