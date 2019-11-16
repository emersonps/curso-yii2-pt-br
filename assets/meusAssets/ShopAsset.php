<?php 

namespace app\assets\meusAssets;

use yii\web\AssetBundle;

class ShopAsset extends AssetBundle
{
  public $basePath = 'webroot';
  public $baseUrl = '@web';

  public $css = [
    'css/shop-homepage.css',
  ];

  public $depends = [
    'yii\web\YiiAsset',
    'yii\bootstrap\BootstrapAsset',
  ];
}