<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "jogador".
 *
 * @property int $id_jogador
 * @property string $nome
 * @property int $elo
 * @property int $email
 * @property string $foto
 * @property string $data_nas
 * @property string $residencia
 * @property string $telemovel
 * @property string $Nacionalidade
 * @property int $estado
 * @property string $data_log
 * @property int $Socio_id
 * @property int $associacao_id
 * @property int $clube_id
 *
 * @property JogoJogador[] $jogoJogadors
 */
class Jogador extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jogador';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'elo', 'email', 'foto', 'data_nas', 'residencia', 'telemovel', 'Nacionalidade', 'estado', 'data_log', 'Socio_id', 'associacao_id', 'clube_id'], 'required'],
            [['elo', 'email', 'estado', 'Socio_id', 'associacao_id', 'clube_id'], 'integer'],
            [['foto'], 'string'],
            [['data_nas', 'data_log'], 'safe'],
            [['nome', 'residencia', 'telemovel', 'Nacionalidade'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_jogador' => 'Id Jogador',
            'nome' => 'Nome',
            'elo' => 'Elo',
            'email' => 'Email',
            'foto' => 'Foto',
            'data_nas' => 'Data Nas',
            'residencia' => 'Residencia',
            'telemovel' => 'Telemovel',
            'Nacionalidade' => 'Nacionalidade',
            'estado' => 'Estado',
            'data_log' => 'Data Log',
            'Socio_id' => 'Socio ID',
            'associacao_id' => 'Associacao ID',
            'clube_id' => 'Clube ID',
        ];
    }

    /**
     * Gets query for [[JogoJogadors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJogoJogadors()
    {
        return $this->hasMany(JogoJogador::className(), ['jogador_id' => 'id_jogador']);
    }
}
