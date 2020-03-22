<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "associado".
 *
 * @property int $id_associado
 * @property string $nome
 * @property int $bi
 * @property int $nif
 * @property string $tipo_associado
 * @property int $associacao_id
 *
 * @property Associacao $associacao
 * @property Cotum[] $cota
 * @property Pagamento[] $pagamentos
 */
class Associado extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'associado';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'bi', 'nif', 'tipo_associado', 'associacao_id'], 'required'],
            [['bi', 'nif', 'associacao_id'], 'integer'],
            [['tipo_associado'], 'string'],
            [['nome'], 'string', 'max' => 250],
            [['associacao_id'], 'exist', 'skipOnError' => true, 'targetClass' => Associacao::className(), 'targetAttribute' => ['associacao_id' => 'id_associacao']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_associado' => 'Id Associado',
            'nome' => 'Nome',
            'bi' => 'Bi',
            'nif' => 'Nif',
            'tipo_associado' => 'Tipo Associado',
            'associacao_id' => 'Associacao ID',
        ];
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

    /**
     * Gets query for [[Cota]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCota()
    {
        return $this->hasMany(Cotum::className(), ['socio_id' => 'id_associado']);
    }

    /**
     * Gets query for [[Pagamentos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPagamentos()
    {
        return $this->hasMany(Pagamento::className(), ['socio_id' => 'id_associado']);
    }
}
