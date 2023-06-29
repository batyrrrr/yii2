<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Abouthero $model */

$this->title = 'Create Abouthero';
$this->params['breadcrumbs'][] = ['label' => 'Aboutheroes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="abouthero-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
