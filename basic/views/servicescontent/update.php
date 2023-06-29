<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Servicescontent $model */

$this->title = Yii::t('app', 'Update Servicescontent: {name}', [
    'name' => $model->title_ru,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Servicescontents'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title_ru, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="servicescontent-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>