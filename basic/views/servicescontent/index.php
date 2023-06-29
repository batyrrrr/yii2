<?php

use app\models\Servicescontent;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Servicescontents');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="servicescontent-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Servicescontent'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title_ru',
            'title_kk',
            'text_ru:ntext',
            'text_kk',
            'button_ru',
            'button_kk',
            'icon',
            'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Servicescontent $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>