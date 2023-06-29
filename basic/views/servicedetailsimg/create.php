<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Servicedetailsimg $model */

$this->title = Yii::t('app', 'Create Servicedetailsimg');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Servicedetailsimgs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="servicedetailsimg-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
