<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Aboutpagestory $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="aboutpagestory-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title1_ru')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'title1_kk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'year')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title2_ru')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'title2_kk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text1_ru')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'text1_kk')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'subtitle1_ru')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'subtitle1_kk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subtitle2_ru')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'subtitle2_kk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subtitle3_ru')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'subtitle3_kk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text2_ru')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'text2_kk')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'image')->fileInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'video')->fileInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>