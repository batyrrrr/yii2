<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Forminput $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="forminput-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_kk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subtitle_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subtitle_kk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
