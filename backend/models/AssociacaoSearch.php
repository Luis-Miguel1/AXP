<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Associacao;

/**
 * AssociacaoSearch represents the model behind the search form of `backend\models\Associacao`.
 */
class AssociacaoSearch extends Associacao
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_associacao'], 'integer'],
            [['nome', 'pais', 'cidade', 'dat_fundacao', 'rua'], 'safe'],
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
        $query = Associacao::find();

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
            'id_associacao' => $this->id_associacao,
            'dat_fundacao' => $this->dat_fundacao,
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'pais', $this->pais])
            ->andFilterWhere(['like', 'cidade', $this->cidade])
            ->andFilterWhere(['like', 'rua', $this->rua]);

        return $dataProvider;
    }
}
