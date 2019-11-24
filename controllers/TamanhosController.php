<?php
  namespace app\controllers;

  use yii\data\ActiveDataProvider;
  use yii\filters\AccessControl;
  use yii\filters\VerbFilter;
  use yii\web\Controller;
  use app\models\Tamanhos;

  class TamanhosController extends Controller
  {
    public function behaviors()
    {
      return [
        'access' => [
          'class' => AccessControl::className(),
          'only' => ['logout'],
          'rules' => [
            [
              'actions' => ['logout'],
              'allow' => true,
              'roles' => ['@'],
            ]
          ],
        ],
        'verbs' => [
          'class' => VerbFilter::className(),
          'actions' => [
            'logout' => ['post'],
          ],
        ],
      ];
    }

    public function action()
    {
      return [
        'error' => [
          'class' => 'yii\web\ErrorAction',
        ],
      ];
    }

    public function actionIndex()
    {
      $query = Tamanhos::find()
        ->where(['status' => '1']);

      $dataProvider = new ActiveDataProvider([
        'query' => $query,
        'pagination' => [
          'pageSize' => 3
        ],
        'sort' => [
          'defaultOrder' => ['nome' => SORT_ASC]
        ]
      ]);

      return $this->render('index',[
        'dataProvider' => $dataProvider,
      ]);
    }

  }