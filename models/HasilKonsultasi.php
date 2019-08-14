<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hasil_konsultasi".
 *
 * @property string $id_hasil_konsultasi
 * @property string $id_konsultasi
 * @property int $id_aturan
 * @property bool $jawaban
 * @property string $cf_user
 *
 * @property Aturan $aturan
 * @property Konsultasi $konsultasi
 */
class HasilKonsultasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hasil_konsultasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_konsultasi', 'id_aturan', 'jawaban'], 'required'],
            [['id_konsultasi', 'id_aturan'], 'default', 'value' => null],
            [['id_konsultasi', 'id_aturan'], 'integer'],
            [['jawaban'], 'boolean'],
            [['cf_user'],'number','min'=>0,'max'=>1],
            [['id_aturan'], 'exist', 'skipOnError' => true, 'targetClass' => Aturan::className(), 'targetAttribute' => ['id_aturan' => 'id_aturan']],
            [['id_konsultasi'], 'exist', 'skipOnError' => true, 'targetClass' => Konsultasi::className(), 'targetAttribute' => ['id_konsultasi' => 'id_konsultasi']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_hasil_konsultasi' => 'Id Hasil Konsultasi',
            'id_konsultasi' => 'Id Konsultasi',
            'id_aturan' => 'Id Aturan',
            'jawaban' => 'Jawaban',
            'cf_user' => 'Cf User',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAturan()
    {
        return $this->hasOne(Aturan::className(), ['id_aturan' => 'id_aturan']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKonsultasi()
    {
        return $this->hasOne(Konsultasi::className(), ['id_konsultasi' => 'id_konsultasi']);
    }
}
