<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * Class Pessoa 
 * @package app\models
 
 * @package int $id
 * @package string $nome
 * @package string $email
 * @package PessoaFisica $pessoaFisica
 * 
 */
class Pessoa extends ActiveRecord
{
    
  public static function tableName()
  {
    return 'pessoa';
  }

  public function rules()
  {
      return [
          [['nome','email'],'required'],
          ['nome','string', 60],
          ['email','string', 100],
      ];
  }

  public function getPessoaFisica()
  {
    //SELECT * FROM 'pessoas' AS 'p'
    //INNER JOIN 'pessoa_fisica' AS 'pf' ON 'pf'.'pessoa_id' = 'p.'.'id'
    return $this->hasOne(PessoaFisica::class, ['pessoa_id' => 'id']);
  }
}
