<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Orgaos;

/**
 * OrgaosSearch represents the model behind the search form of `backend\models\Orgaos`.
 */
class OrgaosSearch extends Orgaos
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_orgaos', 'associacao_id', 'estado'], 'integer'],
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
        $query = Orgaos::find();

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
            'id_orgaos' => $this->id_orgaos,
            'data' => $this->data,
            'associacao_id' => $this->associacao_id,
            'estado' => $this->estado,
        ]);

        return $dataProvider;
    }
}
