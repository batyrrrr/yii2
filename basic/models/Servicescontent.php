<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "servicescontent".
 *
 * @property int $id
 * @property string|null $title_ru
 * @property string|null $title_kk
 * @property string|null $text_ru
 * @property string|null $text_kk
 * @property string|null $button_ru
 * @property string|null $button_kk
 * @property string|null $icon
 * @property int|null $status
 */
class Servicescontent extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'servicescontent';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text_ru', 'text_kk', 'button_ru', 'button_kk'], 'string'],
            [['status'], 'integer'],
            [['title_ru', 'title_kk', 'icon'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'text' => Yii::t('app', 'Text'),
            'icon' => Yii::t('app', 'Icon'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
