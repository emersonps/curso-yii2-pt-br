<?php

namespace app\modules\financeiro;

use yii\base\Module;
use Yii;

class FinanceiroModule extends Module
{
  // public $layout = 'blank';

  public function init()
  {
    parent::init();

    Yii::configure($this, require(__DIR__.'/config/main.php'));
  }
}