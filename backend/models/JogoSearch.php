<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Jogo;

/**
 * JogoSearch represents the model behind the search form of `backend\models\Jogo`.
 */
class JogoSearch extends Jogo
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_jogo', 'brancas', 'petras', 'vencedor', 'perdedor', 'competicao_id'], 'integer'],
            [['data', 'updated-at', 'registro_partida'], 'safe'],
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
        $query = Jogo::find();

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
            'id_jogo' => $this->id_jogo,
            'data' => $this->data,
            'updated-at' => $this->updated-at,
            'brancas' => $this->brancas,
            'petras' => $this->petras,
            'vencedor' => $this->vencedor,
            'perdedor' => $this->perdedor,
            'competicao_id' => $this->competicao_id,
        ]);

        $query->andFilterWhere(['like', 'registro_partida', $this->registro_partida]);

        return $dataProvider;
    }
}
