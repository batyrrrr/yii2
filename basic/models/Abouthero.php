<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "abouthero".
 *
 * @property int $id
 * @property string|null $image
 * @property int|null $status
 */
class Abouthero extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'abouthero';
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
            'id' => 'ID',
            'image' => 'Image',
            'status' => 'Status',
        ];
    }
}
