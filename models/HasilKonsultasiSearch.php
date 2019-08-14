<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\HasilKonsultasi;

/**
 * HasilKonsultasiSearch represents the model behind the search form of `app\models\HasilKonsultasi`.
 */
class HasilKonsultasiSearch extends HasilKonsultasi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_hasil_konsultasi', 'id_konsultasi', 'id_aturan'], 'integer'],
            [['jawaban'], 'boolean'],
            [['cf_user'], 'safe'],
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
        $query = HasilKonsultasi::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_hasil_konsultasi' => $this->id_hasil_konsultasi,
            'id_konsultasi' => $this->id_konsultasi,
            'id_aturan' => $this->id_aturan,
            'jawaban' => $this->jawaban,
        ]);

        $query->andFilterWhere(['ilike', 'cf_user', $this->cf_user]);

        return $dataProvider;
    }
}
