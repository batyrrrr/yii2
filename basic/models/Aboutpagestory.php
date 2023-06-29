<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aboutpagestory".
 *
 * @property int $id
 * @property string|null $title1_ru
 * @property string|null $title1_kk
 * @property string|null $year
 * @property string|null $title2_ru
 * @property string|null $title2_kk
 * @property string|null $text1
 * @property string|null $subtitle1_ru
 * @property string|null $subtitle1_kk
 * @property string|null $subtitle2_ru
 * @property string|null $subtitle2_kk
 * @property string|null $subtitle3_ru
 * @property string|null $subtitle3_kk
 * @property string|null $text2_ru
 * @property string|null $text2_kk
 * @property string|null $video
 * @property int|null $status
 */
class Aboutpagestory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'aboutpagestory';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text1_ru', 'text1_kk', 'text2_ru', 'text2_kk'], 'string'],
            [['status'], 'integer'],
            [['title1_ru', 'title1_kk', 'year', 'title2_ru', 'title1_kk', 'subtitle1_ru', 'subtitle1_kk', 'subtitle2_ru', 'subtitle2_kk', 'subtitle3_ru', 'subtitle3_kk', 'video'], 'string', 'max' => 255,],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title1' => 'Title1',
            'year' => 'Year',
            'title2' => 'Title2',
            'text1' => 'Text1',
            'subtitle1' => 'Subtitle1',
            'subtitle2' => 'Subtitle2',
            'subtitle3' => 'Subtitle3',
            'text2' => 'Text2',
            'video' => 'Video',
            'status' => 'Status',
        ];
    }
}
