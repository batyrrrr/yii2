<?php

use app\models\Aboutpagestory;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Aboutpagestories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aboutpagestory-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Aboutpagestory', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title1',
            'year',
            'title2',
            'text1:ntext',
            //'subtitle1',
            //'subtitle2',
            //'subtitle3',
            //'text2:ntext',
            [
                'attribute' => 'image',
                'value' => function ($anything) {
                    return '/uploads/about-story/' . $anything->image;
                },
                'format' => ['image', ['height' => 100]]
            ],
            [
                'attribute' => 'video',
                'value' => function ($anything) {
                    return '<b>' . $anything->video . '</b>';
                },
                'format' => 'html'
            ],

            //'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Aboutpagestory $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>