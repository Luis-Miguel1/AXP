<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "direcao".
 *
 * @property int $id_direcao
 * @property string $presidente
 * @property string $vice_presidente
 * @property string $secretario
 * @property string $tesoureiro
 * @property string $director_tecnico
 * @property string $data_log
 * @property int $estado
 * @property int|null $orgaos_id
 *
 * @property Orgao $orgaos
 */
class Direcao extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'direcao';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['presidente', 'vice_presidente', 'secretario', 'tesoureiro', 'director_tecnico', 'data_log', 'estado'], 'required'],
            [['data_log'], 'safe'],
            [['estado', 'orgaos_id'], 'integer'],
            [['presidente', 'vice_presidente', 'secretario', 'tesoureiro', 'director_tecnico'], 'string', 'max' => 250],
            [['orgaos_id'], 'exist', 'skipOnError' => true, 'targetClass' => Orgaos::className(), 'targetAttribute' => ['orgaos_id' => 'id_orgaos']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_direcao' => 'Id Direcao',
            'presidente' => 'Presidente',
            'vice_presidente' => 'Vice Presidente',
            'secretario' => 'Secretario',
            'tesoureiro' => 'Tesoureiro',
            'director_tecnico' => 'Director Tecnico',
            'data_log' => 'Data Log',
            'estado' => 'Estado',
            'orgaos_id' => 'Orgaos ID',
        ];
    }

    /**
     * Gets query for [[Orgaos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrgaos()
    {
        return $this->hasOne(Orgao::className(), ['id_orgaos' => 'orgaos_id']);
    }
}
