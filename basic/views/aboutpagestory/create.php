<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Aboutpagestory $model */

$this->title = 'Create Aboutpagestory';
$this->params['breadcrumbs'][] = ['label' => 'Aboutpagestories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aboutpagestory-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
