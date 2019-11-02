<?php

namespace app\classes\widgets;

use yii\base\Widget;
use yii\helpers\Html;

class HelloWidgetRender extends widget
{
    public $message;
    public $submessage;    
  
    public function init()
    {
      parent::init();//para iniciar o init do seu pai
      
      if($this->message === null)
        $this->message = 'Hello World';

      if($this->submessage === null)
        $this->submessage = "I'm here!";
    }

    public function run()
    {
      return $this->render('hello',[
        'message' => $this->message,
        'submessage' => $this->submessage,
      ]);
    }
}