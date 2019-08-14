<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "diagnosa".
 *
 * @property string $kode
 * @property string $nama
 * @property string $solusi
 *
 * @property Konsultasi[] $konsultasis
 * @property Pakar[] $pakars
 */
class Diagnosa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'diagnosa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode', 'nama'], 'required'],
            [['solusi'], 'string'],
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
            'nama' => 'Nama Diagnosa',
            'solusi' => 'Solusi',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKonsultasis()
    {
        return $this->hasMany(Konsultasi::className(), ['kode_diagnosa' => 'kode']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPakars()
    {
        return $this->hasMany(Pakar::className(), ['kode_diagnosa' => 'kode']);
    }
}
