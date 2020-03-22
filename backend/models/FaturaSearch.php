<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Fatura;

/**
 * FaturaSearch represents the model behind the search form of `backend\models\Fatura`.
 */
class FaturaSearch extends Fatura
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_fatura', 'estado', 'pagamento_id'], 'integer'],
            [['data_log'], 'safe'],
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
        $query = Fatura::find();

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
            'id_fatura' => $this->id_fatura,
            'data_log' => $this->data_log,
            'estado' => $this->estado,
            'pagamento_id' => $this->pagamento_id,
        ]);

        return $dataProvider;
    }
}
