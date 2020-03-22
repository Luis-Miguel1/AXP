<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "assembleia".
 *
 * @property int $id_assenbleia
 * @property int $presidente
 * @property string $vice_presidente
 * @property string $secretario
 * @property int|null $data_log
 * @property int|null $estado
 * @property int|null $orgaos_id
 *
 * @property Orgaos $orgaos
 */
class Assembleia extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'assembleia';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_assenbleia', 'presidente', 'vice_presidente', 'secretario'], 'required'],
            [['id_assenbleia', 'presidente', 'data_log', 'estado', 'orgaos_id'], 'integer'],
            [['vice_presidente', 'secretario'], 'string', 'max' => 250],
            [['id_assenbleia'], 'unique'],
            [['orgaos_id'], 'exist', 'skipOnError' => true, 'targetClass' => Orgaos::className(), 'targetAttribute' => ['orgaos_id' => 'id_orgaos']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_assenbleia' => 'Id Assenbleia',
            'presidente' => 'Presidente',
            'vice_presidente' => 'Vice Presidente',
            'secretario' => 'Secretario',
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
        return $this->hasOne(Orgaos::className(), ['id_orgaos' => 'orgaos_id']);
    }
}
