<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Clube;

/**
 * ClubeSearch represents the model behind the search form of `backend\models\Clube`.
 */
class ClubeSearch extends Clube
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_clube', 'telefone'], 'integer'],
            [['nome', 'email', 'foto', 'residencia'], 'safe'],
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
        $query = Clube::find();

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
            'id_clube' => $this->id_clube,
            'telefone' => $this->telefone,
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'foto', $this->foto])
            ->andFilterWhere(['like', 'residencia', $this->residencia]);

        return $dataProvider;
    }
}
