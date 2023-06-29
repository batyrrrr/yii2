<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "form".
 *
 * @property int $id
 * @property string|null $title_ru
 * @property string|null $title_kk
 * @property string|null $description_ru
 * @property string|null $description_kk
 * @property int|null $status
 */
class Form extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'form';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description_ru','description_kk'], 'string'],
            [['status'], 'integer'],
            [['title_ru','title_kk'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'status' => 'Status',
        ];
    }
}
