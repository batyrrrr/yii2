<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Servicestestimonials $model */

$this->title = Yii::t('app', 'Create Servicestestimonials');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Servicestestimonials'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="servicestestimonials-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
