<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sliderimg".
 *
 * @property int $id
 * @property string|null $bgimage
 * @property int|null $status
 */
class Sliderimg extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sliderimg';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status'], 'integer'],
            [['bgimage'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'bgimage' => 'Bgimage',
            'status' => 'Status',
        ];
    }
}
