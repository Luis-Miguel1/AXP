<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "associacao".
 *
 * @property int $id_associacao
 * @property string $nome
 * @property string $pais
 * @property string $cidade
 * @property string $dat_fundacao
 * @property string $rua
 *
 * @property Orgaos[] $orgaos
 */
class Associacao extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'associacao';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [[ 'nome', 'pais', 'cidade', 'dat_fundacao', 'rua'], 'required'],
            [['id_associacao'], 'integer'],
            [['pais', 'cidade', 'rua'], 'string'],
            [['dat_fundacao'], 'safe'],
            [['nome'], 'string', 'max' => 255],
            [['id_associacao'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_associacao' => 'Id Associacao',
            'nome' => 'Nome',
            'pais' => 'Pais',
            'cidade' => 'Cidade',
            'dat_fundacao' => 'Dat Fundacao',
            'rua' => 'Rua',
        ];
    }

    /**
     * Gets query for [[Orgaos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrgaos()
    {
        return $this->hasMany(Orgaos::className(), ['associacao_id' => 'id_associacao']);
    }
}
