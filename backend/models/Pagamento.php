<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pagamento".
 *
 * @property int $id_pagamento
 * @property float $quantia
 * @property string $data
 * @property int $estado
 * @property int $socio_id
 *
 * @property Fatura[] $faturas
 * @property Associado $socio
 * @property Recibo[] $recibos
 */
class Pagamento extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pagamento';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pagamento', 'quantia', 'data', 'estado', 'socio_id'], 'required'],
            [['id_pagamento', 'estado', 'socio_id'], 'integer'],
            [['quantia'], 'number'],
            [['data'], 'safe'],
            [['id_pagamento'], 'unique'],
            [['socio_id'], 'exist', 'skipOnError' => true, 'targetClass' => Associado::className(), 'targetAttribute' => ['socio_id' => 'id_associado']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pagamento' => 'Id Pagamento',
            'quantia' => 'Quantia',
            'data' => 'Data',
            'estado' => 'Estado',
            'socio_id' => 'Socio ID',
        ];
    }

    /**
     * Gets query for [[Faturas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFaturas()
    {
        return $this->hasMany(Fatura::className(), ['pagamento_id' => 'id_pagamento']);
    }

    /**
     * Gets query for [[Socio]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSocio()
    {
        return $this->hasOne(Associado::className(), ['id_associado' => 'socio_id']);
    }

    /**
     * Gets query for [[Recibos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRecibos()
    {
        return $this->hasMany(Recibo::className(), ['pagamento_id' => 'id_pagamento']);
    }
}
