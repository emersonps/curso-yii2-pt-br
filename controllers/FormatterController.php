<?php

namespace app\controllers;

use yii\web\Controller;
use Yii;

class FormatterController extends Controller
{
  public function actionIndex()
  {
    $appLang = Yii::$app->language;

    /** @var MyFormatter $formatter */
    $formatter = Yii::$app->formatter;

    echo "<h2>{$appLang}</h2>";

    echo "
      <p>CEP: {$formatter->asCep('69028347')}</p>
      <p>CNPJ: {$formatter->asCnpj('12345678000122')}</p>
      <p>CPF: {$formatter->asCpf('85258598268')}</p>
      <p>Size (Tamanho): {$formatter->asShortSize(10240)}</p>
      <p>Moedas: {$formatter->asCurrency(100200.45)}</p>
      <p>Datas Formato PHP: {$formatter->asDate("2016-03-20", 'php:d/m/Y')}</p>
      <p>Datas Formato: {$formatter->asDate("2016-03-20", 'dd/MM/YYYY')}</p>
      <p>Datas: {$formatter->asDate("2016-03-20", 'long')}</p>
      <p>Datas: {$formatter->asDate("2016-03-20", 'medium')}</p>
      <p>Datas: {$formatter->asDate("2016-03-20", 'short')}</p>
      <p>Datas: {$formatter->asDate("2016-03-20")}</p>
      <p>NText: {$formatter->asNText("emerson\nPinheiro\nSouza")}</p>
      <p>E-mails: {$formatter->asEmail('emerson@gmail.com')}</p>
      <p>Booleans: {$formatter->asBoolean(true)}</p>
      <p>Percentuais: {$formatter->asPercent(0.12345, 2)}</p>
    ";
  }
}