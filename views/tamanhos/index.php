<?php 
  use yii\grid\GridView;
  
  $this->title;
?>

<div class="jumbotron">
  <h1>Cores</h1>
  
  <?= \yii\grid\GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
      // 'id',
      [
        'attribute' => 'id',
        'header' => '#',
        'headerOptions' => [
          'style' => 'text-align: right; width: 70px;',s
        ],
        'contentOptions' => [
          'style' => 'text-align: right'
        ]
      ],
      'criado_em',
      'abreviacao',
      [
        'attribute' => 'nome',
        'content' => function($model/*, $key, $index, $column*/){
          return $model->nome . " ({$model->abreviacao}) ";
        },
      ]
    ]
  ]); ?>
</div>