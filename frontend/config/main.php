<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
    'urlManager' => [
			    'class' => 'yii\web\UrlManager',
			    'enablePrettyUrl' => true,
			    'showScriptName' => false,
			    'rules'=>[
				             [
				             'class' => 'yii\rest\UrlRule','controller' =>'event',
							 'class' => 'yii\rest\UrlRule','controller' =>'scannerrest',
				             ],
			             ],
	                    	],
	       'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
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
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'request' => [
                       'parsers' =>[
                                    'application/json' => 'yii\web\JsonParser',
                                   ]                       
                     ],
    ],
    'params' => $params,
];
