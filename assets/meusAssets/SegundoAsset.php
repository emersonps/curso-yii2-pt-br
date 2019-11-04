<?php

namespace app\assets\meusAssets;
use yii\web\AssetBundle;

class SegundoAsset extends AssetBundle
{
 public $sourcePath = '@app/assets/meusAssets/files'; //Sobrescrever Pasta de origem dos assets de fonts

 public $css = [
   'estilo1.css',
   'estilo2.css',
 ];

 public $js = [
   'logica.js',
   'ui.js',
   'models.js',
 ];

 public $depends = [
   'app\assets\meusassets\PrimeiroAsset'
 ];
}