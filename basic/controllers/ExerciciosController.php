<?php
  namespace app\controllers;

  use app\models\CadastroModel;
  use app\models\Pessoas;
  use yii\data\Pagination;   
  use yii\base\Controller; 
  use Yii;

  class ExerciciosController extends Controller 
  {
    public function actionFormulario(){
      $cadastroModel = new CadastroModel;
      $post = Yii::$app->request->post();

      if($cadastroModel->load($post) && $cadastroModel->validate()){
 
        return $this->render('formulario-confirmacao',
        [
          'model' => $cadastroModel,
        ]);
 
      }else{
 
        return $this->render('formulario', 
        [
          'model' => $cadastroModel
        ]);
 
      }
    }

    public function actionPessoas()
    {
      $query = Pessoas::find();

      $pagination = new Pagination([
        'defaultPageSize' => 3,
        'totalCount' => $query->count()
      ]);
      
      $pessoas = $query->orderBy('nome')
                      ->offset($pagination->offset)
                      ->offset($pagination->limit)
                      ->all();
      
      return $this->render('pessoas',[
        'pessoas'=> $pessoas,
        'pagination' => $pagination
      ]);
      // $pessoas = Pessoas::find()->orderBy('nome')->all();
      // echo '<pre>'.print_r($pessoas);

      // $pessoa = Pessoas::findOne(1);
      // echo $pessoa->nome.' - '.$pessoa->email;

      // $pessoa->nome = 'Emmerson P. de Souza';
      // $pessoa->save();

      // echo $pessoa->nome.' - '.$pessoa->email;
    }
  }