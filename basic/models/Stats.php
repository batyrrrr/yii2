<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "stats".
 *
 * @property int $id
 * @property string|null $icon
 * @property int|null $number
 * @property string|null $text_ru
 * @property string|null $text_kk
 * @property int|null $status
 */
class Stats extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'stats';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['number', 'status'], 'integer'],
            [['icon', 'text_ru', 'text_kk'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'icon' => 'Icon',
            'number' => 'Number',
            'text' => 'Text',
            'status' => 'Status',
        ];
    }
}
