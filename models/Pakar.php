<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pakar".
 *
 * @property int $id_pakar
 * @property string $kode_diagnosa
 * @property string $kode_gejala
 * @property string $mb
 * @property string $md
 *
 * @property Diagnosa $kodeDiagnosa
 * @property Gejala $kodeGejala
 */
class Pakar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pakar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_diagnosa', 'kode_gejala', 'mb', 'md'], 'required'],
            [['kode_diagnosa', 'kode_gejala'], 'string', 'max' => 10],
			[['mb', 'md'],'number','min'=>0,'max'=>1],
            [['kode_diagnosa'], 'exist', 'skipOnError' => true, 'targetClass' => Diagnosa::className(), 'targetAttribute' => ['kode_diagnosa' => 'kode']],
            [['kode_gejala'], 'exist', 'skipOnError' => true, 'targetClass' => Gejala::className(), 'targetAttribute' => ['kode_gejala' => 'kode']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pakar' => 'ID',
            'kode_diagnosa' => 'Diagnosa',
            'kode_gejala' => 'Gejala',
            'mb' => 'Nilai MB',
            'md' => 'Nilai MD',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKodeDiagnosa()
    {
        return $this->hasOne(Diagnosa::className(), ['kode' => 'kode_diagnosa']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKodeGejala()
    {
        return $this->hasOne(Gejala::className(), ['kode' => 'kode_gejala']);
    }
}
