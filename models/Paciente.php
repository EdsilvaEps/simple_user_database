<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Paciente".
 *
 * @property int $pacienteID
 * @property string $nome
 * @property string $cpf
 * @property string $cnh
 * @property string $identidade
 * @property string $emissor
 * @property string $nascimento
 * @property string $criado_em
 * @property string $contato
 */
class Paciente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Paciente';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'cpf', 'identidade', 'nascimento', 'criado_em'], 'required'],
            [['nascimento', 'criado_em'], 'safe'],
            [['nome'], 'string', 'max' => 200],
            [['cpf', 'cnh'], 'string', 'max' => 11],
            [['identidade', 'emissor', 'contato'], 'string', 'max' => 20],
            [['cpf'], 'unique'],
            [['identidade'], 'unique'],
            [['cnh'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'pacienteID' => 'Paciente ID',
            'nome' => 'Nome',
            'cpf' => 'CPF',
            'cnh' => 'CNH',
            'identidade' => 'Documento de Identidade',
            'emissor' => 'Órgão Emissor',
            'nascimento' => 'Data de nascimento',
            'criado_em' => 'Criado Em',
            'contato' => 'Contato',
        ];
    }
}
