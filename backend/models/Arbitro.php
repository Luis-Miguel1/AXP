<?php

namespace backend\models;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "{{%arbitro}}".
 *
 * @property int $id_arbitro
 * @property string $nome
 * @property string $foto
 * @property string $data_nascimento
 * @property string $residencia
 * @property int $telemovel
 * @property string $Nacionalidade
 * @property string $email
 * @property string $titulo
 */
class Arbitro extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%arbitro}}';
    }

    public $file;
    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;
    const SCENARIO_CREATE = 'create';
    const SCENARIO_UPDATE = 'update';

    public function scenarios()
    {
        return [
            self::SCENARIO_CREATE => ['nome', 'foto', 'data_nascimento', 'residencia', 'telemovel', 'Nacionalidade', 'email', 'titulo'],
            self::SCENARIO_UPDATE => ['nome', 'foto', 'data_nascimento', 'residencia', 'telemovel', 'Nacionalidade', 'email', 'titulo'],
            'default' => ['nome', 'foto', 'data_nascimento', 'residencia', 'telemovel', 'Nacionalidade', 'email', 'titulo'],
        ];
    }
    // public function behaviors()
    // {     $Timestamp= TimestampBehavior::className();
    //     $Timestamp-
    //     return [
    //         TimestampBehavior::className(),
    //     ];
    // }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'foto', 'data_nascimento', 'residencia', 'telemovel', 'Nacionalidade',  'titulo'], 'required'],
            [['id_arbitro', 'telemovel',  'estado'], 'integer'],
            [['foto'], 'string'],
            [['email'], 'email'],
            [['data_nascimento','data_log'], 'safe'],
            [['nome', 'residencia', 'Nacionalidade', 'titulo'], 'string', 'max' => 250],
            [['file'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg', 'maxFiles' => 1],
           
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_arbitro' => 'Id Arbitro',
            'nome' => 'Nome',
            'foto' => 'Foto',
            'data_nascimento' => 'Data Nascimento',
            'residencia' => 'Residencia',
            'telemovel' => 'Telemovel',
            'Nacionalidade' => 'Nacionalidade',
            'email' => 'Email',
            'data_log' => 'Data Criacao',
            'estado' => 'Estado',
            'titulo' => 'Titulo',
        ];
    }




    /**
     * {@inheritdoc}
     * @return ArbitroQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ArbitroQuery(get_called_class());
    }
}
