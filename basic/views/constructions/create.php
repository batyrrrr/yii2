<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Constructions $model */

$this->title = 'Create Constructions';
$this->params['breadcrumbs'][] = ['label' => 'Constructions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="constructions-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
