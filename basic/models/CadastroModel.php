<?php 
  namespace app\models;
  
  use yii\base\Model; //class que não usa conexão com BD

  class CadastroModel extends Model
  {
    public $nome;
    public $email;
    public $idade;
    
    //Método Rules - retorna array de configuração das regras
    public function rules()
    {
      return [
        [['nome','email','idade'],'required'],
        ['email','email'], //validação de e-mail
        ['idade','number','integerOnly'=>true] //Obriga o campo a receber numero inteiro
        // ['nome', 'required'],
        // ['email', 'required'],
        // ['idade', 'required']      
      ];
    }

    public function labels(){
      return[
        'nome' => 'Nome Completo',
        'email' => 'E-mail',
        'idade' => 'Idade'
      ];
    }
  }