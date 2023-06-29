<?php

use app\models\Abouthero;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Aboutheroes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="abouthero-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Abouthero', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute' => 'image',
                'value' => function($anything){
                    return '/uploads/about-hero/'.$anything->image;
                },
                'format' => ['image',['height' => 100]]
            ],
            'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Abouthero $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
