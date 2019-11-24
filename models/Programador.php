<?php 

namespace app\models;

use yii\db\ActiveRecord;

/**
 * Class Programador
 * @package app\models
 * 
 * @property int $id
 * @property string $nome
 * @property string $github
 * @property ProgramadorLinguagem[] $programadorLinguagens
 * @property Linguagem[] $Linguagens
 */

class Programador extends ActiveRecord
{
  public static function tableName()
  {
    return 'programadores';
  }

  public function rules()
  {
    return [
      [['nome','github'], 'required'],
      [['nome'],'string', 'max' => 60],
    ];
  }

  public function getProgramadorLinguagens()
  {
    return $this->hasMany(ProgramadorLinguagem::class, ['programador_id' => 'id']);   
  }

  public function getLinguagens()
  {
    return $this->hasMany(Linguagem::class, ['id' => 'linguagem_id'])
    ->viaTable(ProgramadorLinguagem::tableName(),['programador_id' => 'id']);   
  }//à partir de programador, trará as linguagens de programação deles.
}