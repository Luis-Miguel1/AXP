<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "recibo".
 *
 * @property int $id_recibo
 * @property int|null $pagamento_id
 *
 * @property Pagamento $pagamento
 */
class Recibo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'recibo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pagamento_id'], 'integer'],
            [['pagamento_id'], 'exist', 'skipOnError' => true, 'targetClass' => Pagamento::className(), 'targetAttribute' => ['pagamento_id' => 'id_pagamento']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_recibo' => 'Id Recibo',
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
