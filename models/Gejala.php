<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gejala".
 *
 * @property string $kode
 * @property string $nama
 *
 * @property Aturan[] $aturans
 * @property Pakar[] $pakars
 */
class Gejala extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gejala';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode', 'nama'], 'required'],
            [['kode'], 'string', 'max' => 10],
            [['nama'], 'string', 'max' => 255],
            [['kode'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode' => 'Kode',
            'nama' => 'Nama Gejala',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAturans()
    {
        return $this->hasMany(Aturan::className(), ['kode_gejala' => 'kode']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPakars()
    {
        return $this->hasMany(Pakar::className(), ['kode_gejala' => 'kode']);
    }
}
