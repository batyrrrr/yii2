<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Forminput $model */

$this->title = 'Create Forminput';
$this->params['breadcrumbs'][] = ['label' => 'Forminputs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="forminput-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
