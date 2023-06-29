<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contactpage".
 *
 * @property int $id
 * @property string|null $title
 * @property string $subtitle
 * @property string $icon
 * @property int|null $status
 */
class Contactpage extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contactpage';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['subtitle', 'icon'], 'required'],
            [['status'], 'integer'],
            [['title', 'subtitle', 'icon'], 'string', 'max' => 255],
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
            'subtitle' => Yii::t('app', 'Subtitle'),
            'icon' => Yii::t('app', 'Icon'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
