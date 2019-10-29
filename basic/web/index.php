<?php

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');
//tres cenários da aplicação: 'dev', 'prod', 'test'
//pra cada um: YII_ENV_DEV; YII_ENV_PROD; YII_ENV_TEST 
//Se comentar as defined(), a aplicação ficará em prod

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

$config = require __DIR__ . '/../config/web.php';

(new yii\web\Application($config))->run();
