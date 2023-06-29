<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Aboutpageteam $model */

$this->title = 'Update Aboutpageteam: ' . $model->image;
$this->params['breadcrumbs'][] = ['label' => 'Aboutpageteams', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->image, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="aboutpageteam-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>