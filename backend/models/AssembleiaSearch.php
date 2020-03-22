<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Assembleia;

/**
 * AssembleiaSearch represents the model behind the search form of `backend\models\Assembleia`.
 */
class AssembleiaSearch extends Assembleia
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_assenbleia', 'presidente', 'data_log', 'estado', 'orgaos_id'], 'integer'],
            [['vice_presidente', 'secretario'], 'safe'],
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
        $query = Assembleia::find();

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
            'id_assenbleia' => $this->id_assenbleia,
            'presidente' => $this->presidente,
            'data_log' => $this->data_log,
            'estado' => $this->estado,
            'orgaos_id' => $this->orgaos_id,
        ]);

        $query->andFilterWhere(['like', 'vice_presidente', $this->vice_presidente])
            ->andFilterWhere(['like', 'secretario', $this->secretario]);

        return $dataProvider;
    }
}
