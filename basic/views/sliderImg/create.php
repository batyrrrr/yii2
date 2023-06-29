<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Sliderimg $model */

$this->title = 'Create Sliderimg';
$this->params['breadcrumbs'][] = ['label' => 'Sliderimgs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sliderimg-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
