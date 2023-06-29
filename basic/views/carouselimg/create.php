<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Carouselimg $model */

$this->title = 'Create Carouselimg';
$this->params['breadcrumbs'][] = ['label' => 'Carouselimgs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carouselimg-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
