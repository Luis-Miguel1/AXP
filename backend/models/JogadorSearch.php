<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Jogador;

/**
 * JogadorSearch represents the model behind the search form of `backend\models\Jogador`.
 */
class JogadorSearch extends Jogador
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_jogador', 'elo', 'email', 'estado', 'Socio_id', 'associacao_id', 'clube_id'], 'integer'],
            [['nome', 'foto', 'data_nas', 'residencia', 'telemovel', 'Nacionalidade', 'data_log'], 'safe'],
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
        $query = Jogador::find();

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
            'id_jogador' => $this->id_jogador,
            'elo' => $this->elo,
            'email' => $this->email,
            'data_nas' => $this->data_nas,
            'estado' => $this->estado,
            'data_log' => $this->data_log,
            'Socio_id' => $this->Socio_id,
            'associacao_id' => $this->associacao_id,
            'clube_id' => $this->clube_id,
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'foto', $this->foto])
            ->andFilterWhere(['like', 'residencia', $this->residencia])
            ->andFilterWhere(['like', 'telemovel', $this->telemovel])
            ->andFilterWhere(['like', 'Nacionalidade', $this->Nacionalidade]);

        return $dataProvider;
    }
}
