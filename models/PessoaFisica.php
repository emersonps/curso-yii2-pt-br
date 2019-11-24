<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * Class Pessoa 
 * @package app\models
 
 * @package int $pessoa_id
 * @package int $cpf
 * @package string $sexo
 * @package Pessoa $pessoa
 * 
 */
class PessoaFisica extends ActiveRecord
{
  public function rules()
  {
      return [
          [['pessoa_id','cpf','sexo'],'required'],
          ['pessoa_id','integer'],
          ['cpf','integer',11],
          ['sexo','string',1],
          ['pessoa_id','unique'],
      ];
  }

  public function getPessoa()
  {
    //SELECT * FROM 'pessoa_fisica' AS 'pf'
    //INNER JOIN 'pessoa' AS 'f' ON 'f'.'id' = 'pf.'.'pessoa_id'
    return $this->hasOne(Pessoa::class, ['id','pessoa_id']);
  }
}
