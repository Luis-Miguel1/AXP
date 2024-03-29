<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Pagamento;

/**
 * PagamentoSearch represents the model behind the search form of `backend\models\Pagamento`.
 */
class PagamentoSearch extends Pagamento
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pagamento', 'estado', 'socio_id'], 'integer'],
            [['quantia'], 'number'],
            [['data'], 'safe'],
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
        $query = Pagamento::find();

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
            'id_pagamento' => $this->id_pagamento,
            'quantia' => $this->quantia,
            'data' => $this->data,
            'estado' => $this->estado,
            'socio_id' => $this->socio_id,
        ]);

        return $dataProvider;
    }
}
