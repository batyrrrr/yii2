<?php

use app\models\Constructions;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Constructions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="constructions-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Constructions', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title_ru',
            'title_kk',
            'text_ru',
            'text_kk',
            [
                'attribute' => 'image',
                'value' => function ($anything) {
                    return '/uploads/constructions/' . $anything->image;
                },
                'format' => ['image', ['height' => 100]]
            ],
            'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Constructions $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>