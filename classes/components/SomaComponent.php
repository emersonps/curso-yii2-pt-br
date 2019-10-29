<?php
  namespace app\classes\components;

  use yii\base\Component;

  class SomaComponent extends Component
  {
    public function somaValores($valor1, $valor2)
    {
      $soma = $valor1+$valor2;
      echo 'A soma é: '.$soma;
    }
  }