<?php   

namespace app\controllers;

use yii\web\Controller;

class AssetsController extends Controller
{
    
    public $layout = 'blank'; //Sobrescreve a propriedade de layout da classe Controller

    public function actionIndex()
    {
      return $this->render('index',[]);
    }
}