<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Aturan;

/**
 * AturanSearch represents the model behind the search form of `app\models\Aturan`.
 */
class AturanSearch extends Aturan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_aturan'], 'integer'],
            [['kode_gejala', 'ya', 'tidak'], 'safe'],
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
        $query = Aturan::find();

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
            'id_aturan' => $this->id_aturan,
        ]);

        $query->andFilterWhere(['ilike', 'kode_gejala', $this->kode_gejala])
            ->andFilterWhere(['ilike', 'ya', $this->ya])
            ->andFilterWhere(['ilike', 'tidak', $this->tidak]);

        return $dataProvider;
    }
}
