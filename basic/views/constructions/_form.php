<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Constructions $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="constructions-form">
    <!-- ['option'=> ['enctype' => 'multipart/form-data']] -->
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'title_kk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text_ru')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'text_kk')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'image')->fileInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>