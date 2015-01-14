<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
		'urlManager' => [
			    'class' => 'yii\web\UrlManager',
			    'enablePrettyUrl' => true,
			    'showScriptName' => false,
	                    	],
	
        'cache' => [
            	'class' => 'yii\caching\FileCache',
        ],
        'request' => [
    'parsers' => [
        'application/json' => 'yii\web\JsonParser',
    ]
]
    ],
];
