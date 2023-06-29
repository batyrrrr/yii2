<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "serviceshero".
 *
 * @property int $id
 * @property string|null $img
 * @property int|null $status
 */
class Serviceshero extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'serviceshero';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status'], 'integer'],
            [['img'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'img' => Yii::t('app', 'Img'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
