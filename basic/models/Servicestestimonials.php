<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "servicestestimonials".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $quote
 * @property string|null $rating
 * @property string|null $text_ru
 * @property string|null $text_kk
 * @property string|null $image
 * @property int|null $status
 */
class Servicestestimonials extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'servicestestimonials';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status'], 'integer'],
            [['name', 'quote', 'rating', 'text_ru', 'text_kk', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'quote' => Yii::t('app', 'Quote'),
            'rating' => Yii::t('app', 'Rating'),
            'text_ru' => Yii::t('app', 'Text Ru'),
            'text_kk' => Yii::t('app', 'Text Kk'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
