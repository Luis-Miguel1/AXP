<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Direcao;

/**
 * DirecaoSearch represents the model behind the search form of `backend\models\Direcao`.
 */
class DirecaoSearch extends Direcao
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_direcao', 'estado', 'orgaos_id'], 'integer'],
            [['presidente', 'vice_presidente', 'secretario', 'tesoureiro', 'director_tecnico', 'data_log'], 'safe'],
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
        $query = Direcao::find();

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
            'id_direcao' => $this->id_direcao,
            'data_log' => $this->data_log,
            'estado' => $this->estado,
            'orgaos_id' => $this->orgaos_id,
        ]);

        $query->andFilterWhere(['like', 'presidente', $this->presidente])
            ->andFilterWhere(['like', 'vice_presidente', $this->vice_presidente])
            ->andFilterWhere(['like', 'secretario', $this->secretario])
            ->andFilterWhere(['like', 'tesoureiro', $this->tesoureiro])
            ->andFilterWhere(['like', 'director_tecnico', $this->director_tecnico]);

        return $dataProvider;
    }
}
