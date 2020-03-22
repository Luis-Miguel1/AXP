<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "conselho_fiscal".
 *
 * @property int $id_conselho_fiscal
 * @property string $presidente
 * @property string $vice_presidente
 * @property string $vogal
 * @property string $data_log
 * @property int $estado
 * @property int|null $orgaos_id
 *
 * @property Orgao $orgaos
 */
class ConcelhoFiscal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'conselho_fiscal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['presidente', 'vice_presidente', 'vogal', 'data_log', 'estado'], 'required'],
            [['data_log'], 'safe'],
            [['estado', 'orgaos_id'], 'integer'],
            [['presidente', 'vice_presidente', 'vogal'], 'string', 'max' => 250],
            [['orgaos_id'], 'exist', 'skipOnError' => true, 'targetClass' => Orgaos::className(), 'targetAttribute' => ['orgaos_id' => 'id_orgaos']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_conselho_fiscal' => 'Id Conselho Fiscal',
            'presidente' => 'Presidente',
            'vice_presidente' => 'Vice Presidente',
            'vogal' => 'Vogal',
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
