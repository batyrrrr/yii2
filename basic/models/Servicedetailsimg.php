<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "servicedetailsimg".
 *
 * @property int $id
 * @property string|null $image
 * @property int|null $status
 */
class Servicedetailsimg extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'servicedetailsimg';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status'], 'integer'],
            [['image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'image' => Yii::t('app', 'Image'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
