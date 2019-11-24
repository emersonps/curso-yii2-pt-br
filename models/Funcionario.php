<?php 

namespace app\models;

use yii\db\ActiveRecord;

/**
 * Class Funcionario
 * @package app\models
 * 
 * @property int $id
 * @property int $cargo_id
 * @property string $nome
 * @property Cargo $cargo
 */

class Funcionario extends ActiveRecord
{
  public static function tableName()
  {
    return 'funcionarios';
  }

  public function rules()
  {
    return [
      [['nome','cargo_id'], 'required'],
      [['cargo_id'], 'integer'],
      ['nome', 'string', 'max' => 60],
    ];
  }

  public function getCargo()
  {
    //SELECT * FROM 'funcionarios' AS 'f' 
    //INNER JOIN 'cargos' AS 'c' ON 'c'.'id' = 'f'.'cargo_id'
    return $this->hasOne(Cargo::class, ['id' => 'cargo_id']); //N Funcionário tem 1 Cargo
  }
}