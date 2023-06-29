<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Contactpage $model */

$this->title = Yii::t('app', 'Create Contactpage');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Contactpages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contactpage-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
