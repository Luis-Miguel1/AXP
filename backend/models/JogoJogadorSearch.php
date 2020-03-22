<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\JogoJogador;

/**
 * JogoJogadorSearch represents the model behind the search form of `backend\models\JogoJogador`.
 */
class JogoJogadorSearch extends JogoJogador
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_jogo_jogador', 'jogador_id', 'jogo_id'], 'integer'],
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
        $query = JogoJogador::find();

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
            'id_jogo_jogador' => $this->id_jogo_jogador,
            'jogador_id' => $this->jogador_id,
            'jogo_id' => $this->jogo_id,
        ]);

        return $dataProvider;
    }
}
