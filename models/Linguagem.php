<?php 

namespace app\models;

use yii\db\ActiveRecord;

/**
 * Class Linguagem
 * @package app\models
 * 
 * @property int $id
 * @property string $nome
 * @property ProgramadorLinguagem[] $programadorLinguagens
 * @property Programadores[] $programadores
 */

class Linguagem extends ActiveRecord
{
  public static function tableName()
  {
    return 'linguagens';
  }

  public function rules()
  {
    return [
      [['nome'], 'required'],
      [['nome'],'string', 'max' => 60],
    ];
  }

  public function getProgramadorLinguagens()
  {
    return $this->hasMany(ProgramadorLinguagem::class, ['linguagem_id' => 'id']);   
  }

  public function getProgramadores()
  {
    return $this->hasMany(Programador::class, ['id' => 'programador_id'])
    ->viaTable('programadores_linguagens',['linguagem_id' => 'id']);
  }//à partir de programador, trará as linguagens de programação deles.
}