<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "item".
 *
 * @property int $id
 * @property string|null $bgimg
 * @property int $category_id
 * @property string|null $title_ru
 * @property string|null $title_kk
 * @property string|null $subtitle_ru
 * @property string|null $subtitle_kk
 * @property int|null $status
 */
class Item extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'item';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id'], 'required'],
            [['category_id', 'status'], 'integer'],
            [['bgimg', 'title_ru', 'title_kk', 'subtitle_ru', 'subtitle_kk'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'bgimg' => 'Bgimg',
            'category_id' => 'Category ID',
            'title' => 'Title',
            'subtitle' => 'Subtitle',
            'status' => 'Status',
        ];
    }
}
