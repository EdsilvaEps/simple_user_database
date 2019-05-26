<?php
  namespace app\models;

  use Yii;
  use yii\base\Model;
  use app\models\Paciente;
  use DateTime;

  /**
  * validação do formulario de criação do cliente
  */

  class CreatePacienteForm extends Model{
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

    public function save(){

      $nasc = DateTime::createFromFormat('d/m/Y',$this->nascimento);
      $nasc = $nasc->format('Y-m-d');
      $cliente = new Paciente();
      $cliente->nome = $this->nome;
      $cliente->cpf  = $this->cpf;
      $cliente->cnh  = $this->cnh;
      $cliente->identidade = $this->identidade;
      $cliente->emissor = $this->emissor;
      $cliente->nascimento = $nasc;
      $cliente->criado_em = $this->criado_em;
      $cliente->contato = $this->contato;

      return $cliente->save()  ? $cliente : null;
      
    }

  }

 ?>
