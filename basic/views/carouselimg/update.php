<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Carouselimg $model */

$this->title = 'Update Carouselimg: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Carouselimgs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="carouselimg-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
