<?php

use app\models\Aboutpageteam;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Aboutpageteams';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aboutpageteam-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Aboutpageteam', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute' => 'image',
                'value' => function ($anything) {
                    return '/uploads/about-team/' . $anything->image;
                },
                'format' => ['image', ['height' => 100]]
            ],
            'name_ru',
            'quote_ru',
            'quote_kk',
            //'twiiter',
            //'facebook',
            //'instagram',
            //'linkedin',
            //'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Aboutpageteam $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>