<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Sliderimg $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="sliderimg-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'bgimage')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
