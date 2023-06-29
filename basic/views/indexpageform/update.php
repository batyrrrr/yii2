<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Indexpageform $model */

$this->title = 'Update Indexpageform: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Indexpageforms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="indexpageform-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
