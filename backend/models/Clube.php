<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "clube".
 *
 * @property int $id_clube
 * @property string $nome
 * @property string $email
 * @property string $foto
 * @property int $telefone
 * @property string $residencia
 */
class Clube extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'clube';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'email', 'foto', 'telefone', 'residencia'], 'required'],
            [['nome', 'foto', 'residencia'], 'string'],
            [['telefone'], 'integer'],
            [['email'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_clube' => 'Id Clube',
            'nome' => 'Nome',
            'email' => 'Email',
            'foto' => 'Foto',
            'telefone' => 'Telefone',
            'residencia' => 'Residencia',
        ];
    }
}
