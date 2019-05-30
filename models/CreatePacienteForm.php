<?php
  namespace app\models;

  use Yii;
  use yii\base\Model;
  use app\models\Paciente;
  use DateTime;

  /**
  * validação do formulario de criação do paciente
  */

  class CreatePacienteForm extends Paciente{
    public $nome;
    public $cpf;
    public $cnh;
    public $identidade;
    public $emissor;
    public $nascimento;
    public $criado_em;
    public $contato;

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

    public function register(){

      $nasc = DateTime::createFromFormat('d/m/Y',$this->nascimento);
      $nasc = $nasc->format('Y-m-d');
      $paciente = new Paciente();
      $paciente->nome = $this->nome;
      $paciente->cpf  = $this->cpf;
      $paciente->cnh  = $this->cnh;
      $paciente->identidade = $this->identidade;
      $paciente->emissor = $this->emissor;
      $paciente->nascimento = $nasc;
      $paciente->criado_em = $this->criado_em;
      $paciente->contato = $this->contato;

      return $paciente->save()  ? $paciente : null;

    }

  }

 ?>
