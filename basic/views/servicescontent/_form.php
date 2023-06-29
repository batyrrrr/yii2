<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Servicescontent $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="servicescontent-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'title_kk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text_ru')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'text_kk')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'button_ru')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'button_kk')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'icon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>