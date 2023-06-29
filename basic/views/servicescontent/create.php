<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Servicescontent $model */

$this->title = Yii::t('app', 'Create Servicescontent');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Servicescontents'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="servicescontent-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
