<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Servicedetailsimg $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="servicedetailsimg-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'image')->fileInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>