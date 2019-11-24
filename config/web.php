<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

Yii::setAlias('@webroot',dirname(__DIR__).'/web');
Yii::setAlias('@web',(stripos($_SERVER['SERVER_PROTOCOL'],'https') === true ? 'https://' : 'http://' . $_SERVER['SERVER_NAME'] . ($_SERVER['SERVER_PORT'] !== '80' ? ':' . $_SERVER['SERVER_PORT'] : '')));

$config = [
    'id' => 'basic',
    'name' => 'Shopping Virtual',
    'version' => '',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
        '@meualias1' => 'path/to/meu/alias',
        '@galeriaPath' => '@webroot/web/uploads/galerias',
        '@galeriaUrl' => '@web/uploads/galerias',
    ],
    'language' => 'pt-BR',
    'sourceLanguage' => 'pt-BR',
    // 'catchAll' => [
    //     'pessoas/index',
    //     'param1' => 'Emerson',
    //     'param2' => 'Pinheiro',
    // ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'y0z5X2znjdbJP8t4sikZTaU993MgDen6',
            'baseUrl' => Yii::getAlias('@web'),//Para o Helper poder fazer essa mudança
        ],
        'myComponent' => [
            'class' => 'app\classes\components\MyComponent',
            'string' => 'Criando o meu primeiro component no Yii2'
        ],
        'somaComponent' => [
           'class' => 'app\classes\components\SomaComponent',
        ],
        'formatter' => [
            'class' => 'app\classes\components\MyFormatter',
            'dateFormat' => 'dd/MM/YYYY'
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
            'authManager' => [
                'class' => 'yii\rbac\DbManager',
            ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
    ],
    'modules' => [
        'financeiro' => [
            'class' => 'app\modules\financeiro\FinanceiroModule',   
        ]
    ],
    
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        'allowedIPs' => ['127.0.0.1','::1', '192.168.56.*','192.168.15.*']
    ];
}

return $config;
