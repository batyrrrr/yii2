<?php

use app\models\Servicestestimonials;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Servicestestimonials');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="servicestestimonials-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Servicestestimonials'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'quote',
            'rating',
            'text_ru',
            [
                'attribute' => 'image',
                'value' => function ($anything) {
                    return '/uploads/services/' . $anything->image;
                },
                'format' => ['image', ['height' => 100]]
            ],
            // 'image'
            //'text_kk',
            //'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Servicestestimonials $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>