<?php 
namespace app\models;

use yii\db\ActiveRecord;
use app\models\Funcionario;

/**
 * Class Cargo
 * @package app\models
 * 
 * @property int $id
 * @property string $nome
 * @property Funcionario[] $funcionarios
 */
class Cargo extends ActiveRecord
{
  public static function tableName()
  {
    return 'cargos';
  }

  public function rules()
  {
    return [
      ['nome', 'required'],
      ['nome', 'string', 'max' => 60],
    ];
  }

  public function getFuncionarios()
  {
    //SELECT * FROM 'cargos' AS 'c' 
    //INNER JOIN 'funcionarios' AS 'f' ON 'f'.'cargo_id' = 'c'.'d'
    return $this->hasMany(Funcionario::class, ['cargo_id' => 'id']); //1 Cargo tem N funcionários
  }

}