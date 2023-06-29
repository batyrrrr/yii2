<?php

use app\models\Serviceshero;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Servicesheroes');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="serviceshero-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Serviceshero'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute' => 'img',
                'value' => function ($anything) {
                    return '/uploads/services/' . $anything->img;
                },
                'format' => ['image', ['height' => 100]]
            ],
            'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Serviceshero $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>