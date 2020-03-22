<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "fatura".
 *
 * @property int $id_fatura
 * @property string $data_log
 * @property int $estado
 * @property int $pagamento_id
 *
 * @property Pagamento $pagamento
 */
class Fatura extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fatura';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['data_log', 'estado', 'pagamento_id'], 'required'],
            [['data_log'], 'safe'],
            [['estado', 'pagamento_id'], 'integer'],
            [['pagamento_id'], 'exist', 'skipOnError' => true, 'targetClass' => Pagamento::className(), 'targetAttribute' => ['pagamento_id' => 'id_pagamento']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_fatura' => 'Id Fatura',
            'data_log' => 'Data Log',
            'estado' => 'Estado',
            'pagamento_id' => 'Pagamento ID',
        ];
    }

    /**
     * Gets query for [[Pagamento]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPagamento()
    {
        return $this->hasOne(Pagamento::className(), ['id_pagamento' => 'pagamento_id']);
    }
}
