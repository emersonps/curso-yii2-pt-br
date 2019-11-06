<?php 
  use yii\bootstrap\Html;
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head> 
  <meta charset="<?php Yii::$app->charset ?>">
  <?= Html::csrfMetatags() ?>
  <title><?= Html::encode($this->title) ?></title>
  <?= $this->registerMetaTag(['name' => 'viewport', 'content'=>'width=device-width, initial-scale=1'])?>
  <?php $this->head() ?>
</head>
<body>
  <?php $this->beginBody() ?>

    <div>
      <?= $content ?>
    </div>

  <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>