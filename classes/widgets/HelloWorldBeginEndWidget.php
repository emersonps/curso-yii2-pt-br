<?php 

  namespace app\classes\widgets;

  use yii\base\widget;
  use yii\helpers\Html;

  class HelloWorldBeginEndWidget extends widget
  {
    public $encode = true;

    public function init()
    {
      parent::init();
      ob_start();
    }

    public function run()
    {
      $content = ob_get_clean();

      if($this->encode)
        return Html::encode($content);
      else
        return $content;
    } 
  }