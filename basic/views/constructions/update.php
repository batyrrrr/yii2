<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Constructions $model */

$this->title = 'Update Constructions: ' . $model->title_ru;
$this->params['breadcrumbs'][] = ['label' => 'Constructions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title_ru, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="constructions-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>