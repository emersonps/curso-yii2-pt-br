<?php 

namespace app\behaviors;

use yii\base\Behavior;
use yii\base\Event;
use yii\db\ActiveRecord;

class GenerateClientCode extends Behavior
{
  public function events()
  {
    return[
      ActiveRecord::EVENT_BEFORE_INSERT => 'run',
      ActiveRecord::EVENT_BEFORE_UPDATE => 'run',
    ];
  }

  public function run(Event $event)
  {
    $this->owner->code = 'CL-'.\Yii::$app->security->generateRandomString(32);
  }
}