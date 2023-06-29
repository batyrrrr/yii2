<?php

use app\models\Altservices;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Altservices');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="altservices-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Altservices'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute' => 'img',
                'value' => function ($anything) {
                    return '/uploads/altservices/' . $anything->img;
                },
                'format' => ['image', ['height' => 100]]
            ],
            'title_ru',
            'title_kk',
            'text_ru',
            'text_kk',
            //'icon',
            //'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Altservices $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>