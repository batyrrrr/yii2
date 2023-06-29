<?php

use app\models\Carouselimg;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Carouselimgs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carouselimg-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Carouselimg', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute' => 'name',
                'value' => function($anything){
                    return '/uploads/carousel-hero/'.$anything->name;
                },
                'format' => ['image',['height' => 100]]
             ],  
            'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Carouselimg $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
