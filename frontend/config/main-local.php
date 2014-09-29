<?php

$config = [];

if (!YII_ENV_TEST && YII_DEBUG) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = 'yii\debug\Module';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',      
        'allowedIPs' => ['127.0.0.1', '::1', '192.168.0.*'],  
        'generators' => [
            'crud' => [
                'class' => 'yii\gii\generators\crud\Generator', //class generator
                'templates' => [ //setting for out templates
                    'snapcmsCrud' => '@snapcms/gii/crud/default', //name template => path to template
                ]
            ]
        ],
    ];
}

$config['components'] = [
    'db' => [
        'class' => 'yii\db\Connection',
        'dsn' => 'mysql:host=localhost;dbname=snapcms_yii2',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'tablePrefix' => 'snap_',
    ],
];

return $config;
