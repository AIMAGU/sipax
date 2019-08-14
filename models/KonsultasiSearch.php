<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Konsultasi;

/**
 * KonsultasiSearch represents the model behind the search form of `app\models\Konsultasi`.
 */
class KonsultasiSearch extends Konsultasi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_konsultasi', 'id_user'], 'integer'],
            [['nama_penderita', 'jenis_penderita', 'kode_diagnosa', 'hasil_cf', 'tanggal'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Konsultasi::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
			'sort' => [
			'defaultOrder' => [
					'id_konsultasi' => SORT_DESC,
				]
			],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_konsultasi' => $this->id_konsultasi,
            'tanggal' => $this->tanggal,
            'id_user' => $this->id_user,
        ]);

        $query->andFilterWhere(['ilike', 'nama_penderita', $this->nama_penderita])
            ->andFilterWhere(['ilike', 'jenis_penderita', $this->jenis_penderita])
            ->andFilterWhere(['ilike', 'kode_diagnosa', $this->kode_diagnosa])
            ->andFilterWhere(['ilike', 'hasil_cf', $this->hasil_cf]);

        return $dataProvider;
    }
}
