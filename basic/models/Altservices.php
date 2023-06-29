<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "altservices".
 *
 * @property int $id
 * @property string|null $img
 * @property string|null $title_ru
 * @property string|null $title_kk
 * @property string|null $text_ru
 * @property string|null $text_kk
 * @property string|null $icon
 * @property int|null $status
 */
class Altservices extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'altservices';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status'], 'integer'],
            [['img', 'title_ru', 'title_kk', 'text_ru', 'text_kk', 'icon'], 'string', 'max' => 255],
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
            'title_ru' => Yii::t('app', 'Title Ru'),
            'title_kk' => Yii::t('app', 'Title Kk'),
            'text_ru' => Yii::t('app', 'Text Ru'),
            'text_kk' => Yii::t('app', 'Text Kk'),
            'icon' => Yii::t('app', 'Icon'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
