<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Competicao;

/**
 * CompeticaoSearch represents the model behind the search form of `backend\models\Competicao`.
 */
class CompeticaoSearch extends Competicao
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_competicao'], 'integer'],
            [['nome', 'data_inicio', 'data_fim', 'local', 'director_torneio', 'arbitro_principal', 'arbitro_auxiliar'], 'safe'],
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
        $query = Competicao::find();

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
            'id_competicao' => $this->id_competicao,
            'data_inicio' => $this->data_inicio,
            'data_fim' => $this->data_fim,
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'local', $this->local])
            ->andFilterWhere(['like', 'director_torneio', $this->director_torneio])
            ->andFilterWhere(['like', 'arbitro_principal', $this->arbitro_principal])
            ->andFilterWhere(['like', 'arbitro_auxiliar', $this->arbitro_auxiliar]);

        return $dataProvider;
    }
}
