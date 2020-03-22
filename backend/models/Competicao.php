<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "competicao".
 *
 * @property int $id_competicao
 * @property string $nome
 * @property string $data_inicio
 * @property string $data_fim
 * @property string $local
 * @property string $director_torneio
 * @property string $arbitro_principal
 * @property string $arbitro_auxiliar
 *
 * @property Jogo[] $jogos
 */
class Competicao extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'competicao';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'data_inicio', 'data_fim', 'local', 'director_torneio', 'arbitro_principal', 'arbitro_auxiliar'], 'required'],
            [['data_inicio', 'data_fim'], 'safe'],
            [['nome', 'local', 'director_torneio', 'arbitro_principal', 'arbitro_auxiliar'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_competicao' => 'Id Competicao',
            'nome' => 'Nome',
            'data_inicio' => 'Data Inicio',
            'data_fim' => 'Data Fim',
            'local' => 'Local',
            'director_torneio' => 'Director Torneio',
            'arbitro_principal' => 'Arbitro Principal',
            'arbitro_auxiliar' => 'Arbitro Auxiliar',
        ];
    }

    /**
     * Gets query for [[Jogos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJogos()
    {
        return $this->hasMany(Jogo::className(), ['competicao_id' => 'id_competicao']);
    }
}
