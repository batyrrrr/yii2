<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "constructions".
 *
 * @property int $id
 * @property string|null $title_ru
 * @property string|null $title_kk
 * @property string|null $text_ru
 * @property string|null $text_kk
 * @property string|null $image
 * @property int|null $status
 */
class Constructions extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'constructions';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status'], 'integer'],
            [['title_ru', 'title_kk', 'text_ru', 'text_kk', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image' => 'Image',
            'status' => 'Status',
        ];
    }
}
