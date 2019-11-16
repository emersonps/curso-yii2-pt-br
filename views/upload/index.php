<?php 
use yii\bootstrap\Html;
use yii\widgets\ActiveForm;

$this->title = 'Upload de Arquivos';
$this->params['breadcrumbs'][]= $this->title;
?>

<div class="site-index">

  <div class="jumbotron">
    <h1><?= $this->title ?></h1>
  </div>

  <div class="body-content">
    <?php $form = ActiveForm::begin() ?>
      <?= $form->field($model, 'nome') ?>
      <?= $form->field($model, 'fotoCliente')->fileInput() ?>

      <?= Html::submitButton('Salvar', ['class' => 'btn btn-primary']); ?>

     <?php ActiveForm::end() ?> 
  </div>
</div>