<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Aboutpagestory $model */

$this->title = 'Update Aboutpagestory: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Aboutpagestories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="aboutpagestory-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
