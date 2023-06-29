<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aboutpageteam".
 *
 * @property int $id
 * @property string|null $image
 * @property string|null $title_ru
 * @property string|null $title_kk
 * @property string|null $name_ru
 * @property string|null $name_kk
 * @property string|null $quote_ru
 * @property string|null $quote_kk
 * @property string|null $twiiter
 * @property string|null $facebook
 * @property string|null $instagram
 * @property string|null $linkedin
 * @property int|null $status
 */
class Aboutpageteam extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'aboutpageteam';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status'], 'integer'],
            [['image',  'name_ru',  'quote_ru', 'quote_kk',   'twiiter', 'facebook', 'instagram', 'linkedin'], 'string', 'max' => 255],
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
            'title' => 'Title',
            'name' => 'Name',
            'quote' => 'Quote',
            'twiiter' => 'Twiiter',
            'facebook' => 'Facebook',
            'instagram' => 'Instagram',
            'linkedin' => 'Linkedin',
            'status' => 'Status',
        ];
    }
}
