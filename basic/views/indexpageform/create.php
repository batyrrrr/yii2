<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Indexpageform $model */

$this->title = 'Create Indexpageform';
$this->params['breadcrumbs'][] = ['label' => 'Indexpageforms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="indexpageform-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
