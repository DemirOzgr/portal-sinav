<?php

namespace kouosl\sinav\models;

use Yii;

/**
 * This is the model class for table "sinav".
 *
 * @property int $id
 * @property int $sinav_id
 * @property string $sinav_adi
 * @property string $tarih
 * @property string $saat
 * @property string $yer
 */
class Sinav extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sinav';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sinav_id', 'sinav_adi', 'tarih', 'saat', 'yer'], 'required'],
            [['sinav_id'], 'integer'],
            [['sinav_adi', 'tarih', 'saat', 'yer'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sinav_id' => 'Sinav ID',
            'sinav_adi' => 'Sinav Adi',
            'tarih' => 'Tarih',
            'saat' => 'Saat',
            'yer' => 'Yer',
        ];
    }
}
