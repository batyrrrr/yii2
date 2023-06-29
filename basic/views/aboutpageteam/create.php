<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Aboutpageteam $model */

$this->title = 'Create Aboutpageteam';
$this->params['breadcrumbs'][] = ['label' => 'Aboutpageteams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aboutpageteam-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
