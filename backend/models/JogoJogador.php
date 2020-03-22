<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "jogo_jogador".
 *
 * @property int $id_jogo_jogador
 * @property int $jogador_id
 * @property int $jogo_id
 *
 * @property Jogador $jogador
 * @property Jogo $jogo
 */
class JogoJogador extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jogo_jogador';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jogador_id', 'jogo_id'], 'required'],
            [['jogador_id', 'jogo_id'], 'integer'],
            [['jogador_id'], 'exist', 'skipOnError' => true, 'targetClass' => Jogador::className(), 'targetAttribute' => ['jogador_id' => 'id_jogador']],
            [['jogo_id'], 'exist', 'skipOnError' => true, 'targetClass' => Jogo::className(), 'targetAttribute' => ['jogo_id' => 'id_jogo']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_jogo_jogador' => 'Id Jogo Jogador',
            'jogador_id' => 'Jogador ID',
            'jogo_id' => 'Jogo ID',
        ];
    }

    /**
     * Gets query for [[Jogador]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJogador()
    {
        return $this->hasOne(Jogador::className(), ['id_jogador' => 'jogador_id']);
    }

    /**
     * Gets query for [[Jogo]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJogo()
    {
        return $this->hasOne(Jogo::className(), ['id_jogo' => 'jogo_id']);
    }
}
