<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "indexpageform".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $text
 * @property int|null $status
 */
class Indexpageform extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'indexpageform';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text'], 'string'],
            [['status'], 'integer'],
            [['title'], 'string', 'max' => 255],
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
            'text' => 'Text',
            'status' => 'Status',
        ];
    }
}
