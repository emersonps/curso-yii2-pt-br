<?php 

  /** @var View \yii\web\View $this */
  /** @var string $content */
  use yii\helpers\Html;
  use app\assets\meusAssets\ShopAsset;
  
  ShopAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head> 
  <meta charset="<?= Yii::$app->charset ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <?= Html::csrfMetaTags() ?>

  <title><?= Html::encode($this->title) ?></title>
  <?php $this->head() ?>
</head>

  <body>
    <?php $this->beginBody() ?>

    <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
              <?= Html::a('Home',['index'],['class'=>'nav-link']) ?>
              <!-- <span class="sr-only">(current)</span> -->
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <?= Html::a('Services',['services'],['class'=>'nav-link']) ?>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Shop Name</h1>
        <div class="list-group">
          <a href="#" class="list-group-item">Category 1</a>
          <a href="#" class="list-group-item">Category 2</a>
          <a href="#" class="list-group-item">Category 3</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <?= $content ?>
  
      <!-- /.row -->
      </div>
    
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
    
  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">
        Copyright &copy; <?= Yii::powered() ?>
      </p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <!-- <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
  
  <?php $this->endBody() ?>
  </body>
</html>
<?php $this->endPage() ?>
