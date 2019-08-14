<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aturan".
 *
 * @property int $id_aturan
 * @property string $kode_gejala
 * @property string $ya
 * @property string $tidak
 *
 * @property Gejala $kodeGejala
 * @property HasilKonsultasi[] $hasilKonsultasis
 */
class Aturan extends \yii\db\ActiveRecord
{
	public $cfuser;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'aturan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_gejala'], 'required'],
			[['cfuser'],'number','min'=>0,'max'=>1],
            [['kode_gejala', 'ya', 'tidak'], 'string', 'max' => 10],
            [['kode_gejala'], 'exist', 'skipOnError' => true, 'targetClass' => Gejala::className(), 'targetAttribute' => ['kode_gejala' => 'kode']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_aturan' => 'Id Aturan',
            'kode_gejala' => 'Kode Gejala',
            'ya' => 'Ya',
            'tidak' => 'Tidak',
            'cfuser' => 'CF User',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGejala1()
    {
        return $this->hasOne(Gejala::className(), ['kode' => 'kode_gejala']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHasilKonsultasis()
    {
        return $this->hasMany(HasilKonsultasi::className(), ['id_aturan' => 'id_aturan']);
    }
}
