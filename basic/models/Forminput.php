<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "forminput".
 *
 * @property int $id
 * @property string|null $title_ru
 * @property string|null $title_kk
 * @property string|null $subtitle_ru
 * @property string|null $subtitle_kk
 * @property int|null $status
 */
class Forminput extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'forminput';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status'], 'integer'],
            [['title_ru', 'title_kk', 'subtitle_ru', 'subtitle_kk'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title_ru' => 'Title Ru',
            'title_kk' => 'Title Kk',
            'subtitle_ru' => 'Subtitle Ru',
            'subtitle_kk' => 'Subtitle Kk',
            'status' => 'Status',
        ];
    }
}
