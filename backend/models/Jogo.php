<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "jogo".
 *
 * @property int $id_jogo
 * @property string $data
 * @property string $updated-at
 * @property int $brancas
 * @property int $petras
 * @property string $registro_partida
 * @property int $vencedor
 * @property int $perdedor
 * @property int $competicao_id
 *
 * @property Competicao $competicao
 * @property JogoJogador[] $jogoJogadors
 */
class Jogo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jogo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['data', 'updated-at', 'brancas', 'petras', 'registro_partida', 'vencedor', 'perdedor', 'competicao_id'], 'required'],
            [['data', 'updated-at'], 'safe'],
            [['brancas', 'petras', 'vencedor', 'perdedor', 'competicao_id'], 'integer'],
            [['registro_partida'], 'string', 'max' => 250],
            [['competicao_id'], 'exist', 'skipOnError' => true, 'targetClass' => Competicao::className(), 'targetAttribute' => ['competicao_id' => 'id_competicao']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_jogo' => 'Id Jogo',
            'data' => 'Data',
            'updated-at' => 'Updated At',
            'brancas' => 'Brancas',
            'petras' => 'Petras',
            'registro_partida' => 'Registro Partida',
            'vencedor' => 'Vencedor',
            'perdedor' => 'Perdedor',
            'competicao_id' => 'Competicao ID',
        ];
    }

    /**
     * Gets query for [[Competicao]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCompeticao()
    {
        return $this->hasOne(Competicao::className(), ['id_competicao' => 'competicao_id']);
    }

    /**
     * Gets query for [[JogoJogadors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJogoJogadors()
    {
        return $this->hasMany(JogoJogador::className(), ['jogo_id' => 'id_jogo']);
    }
}
