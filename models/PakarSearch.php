<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pakar;

/**
 * PakarSearch represents the model behind the search form of `app\models\Pakar`.
 */
class PakarSearch extends Pakar
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pakar'], 'integer'],
            [['kode_diagnosa', 'kode_gejala', 'mb', 'md'], 'safe'],
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
        $query = Pakar::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

		$dataProvider = new ActiveDataProvider([
			'query' => $query,
			'pagination' => [
				// this $params['pagesize'] is an id of dropdown list that we set in view file
				'pagesize' => (isset($params['pagesize']) ? $params['pagesize'] :  '30'),
			],
		]);
		
        /* if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        } */

        // grid filtering conditions
        $query->andFilterWhere([
            'id_pakar' => $this->id_pakar,
        ]);

        $query->andFilterWhere(['ilike', 'kode_diagnosa', $this->kode_diagnosa])
            ->andFilterWhere(['ilike', 'kode_gejala', $this->kode_gejala])
            ->andFilterWhere(['ilike', 'mb', $this->mb])
            ->andFilterWhere(['ilike', 'md', $this->md]);

        return $dataProvider;
    }
}
