<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Abouthero $model */

$this->title = 'Update Abouthero: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Aboutheroes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="abouthero-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
