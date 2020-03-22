<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "orgaos".
 *
 * @property int $id_orgaos
 * @property string $data
 * @property int $associacao_id
 * @property int $estado
 *
 * @property Assembleium[] $assembleia
 * @property Assembleium[] $assembleia0
 * @property Associacao $associacao
 */
class Orgaos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orgaos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['data', 'associacao_id', 'estado'], 'required'],
            [['data'], 'safe'],
            [['associacao_id', 'estado'], 'integer'],
            [['associacao_id'], 'exist', 'skipOnError' => true, 'targetClass' => Associacao::className(), 'targetAttribute' => ['associacao_id' => 'id_associacao']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_orgaos' => 'Id Orgaos',
            'data' => 'Data',
            'associacao_id' => 'Associacao ID',
            'estado' => 'Estado',
        ];
    }

    /**
     * Gets query for [[Assembleia]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAssembleia()
    {
        return $this->hasMany(Assembleia::className(), ['orgaos_id' => 'id_orgaos']);
    }

    

    /**
     * Gets query for [[Associacao]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAssociacao()
    {
        return $this->hasOne(Associacao::className(), ['id_associacao' => 'associacao_id']);
    }
}
