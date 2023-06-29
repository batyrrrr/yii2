<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Sliderimg $model */

$this->title = 'Update Sliderimg: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Sliderimgs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sliderimg-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
