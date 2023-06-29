<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Serviceshero $model */

$this->title = Yii::t('app', 'Create Serviceshero');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Servicesheroes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="serviceshero-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
