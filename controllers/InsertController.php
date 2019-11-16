<?php   
  namespace app\controllers;

  use yii\web\Controller;
  use app\models\Cliente;
  use Yii;
  
  class InsertController extends Controller
  {
    public function actionIndex()
    {
      $clientes = [
        ['nome' => 'Emerson Pinheiro de Souza'],
        ['nome' => 'Maria  Pinheiro de Souza'],
        ['nome' => 'Sandriane de Araújo Goes'],
        ['nome' => 'Sandri Emilly de Araújo Souza'],
        ['nome' => 'Letícia dos Santos Souza'],
        ['nome' => 'Alessandro Henrique de Araújo Souza'],
      ];
      
      // foreach ($clientes as $cliente){
      //   $row = new Cliente;
      //   $row->nome = $cliente['nome'];
      //   $row->save();
      // }

      Yii::$app->db
        ->createCommand()
        ->batchInsert(Cliente::tablename(), ['nome'], $clientes)
        ->execute();  

      echo 'OK!';

    }
  }