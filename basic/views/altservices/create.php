<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Altservices $model */

$this->title = Yii::t('app', 'Create Altservices');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Altservices'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="altservices-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
