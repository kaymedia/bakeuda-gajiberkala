<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager', // or use 'yii\rbac\PhpManager'
        ],
        'view' => [
            'theme' => [
                'pathMap' => [
                //    '@app/views' => '@vendor/dmstr/yii2-adminlte-asset/example-views/yiisoft/yii2-app'
                   '@app/views' => '@frontend/views/template'
                ],
            ],
        ],
        'assetManager' => [
            'bundles' => [
                'dmstr\web\AdminLteAsset' => [
                    'skin' => 'skin-black',
                ],
            ],
        ],
    ],
	
    'modules' => [
        'admin' => [
            'class' => 'mdm\admin\Module',
        ]
    ],
	'modules' => [
    'gridview' =>  [
        'class' => '\kartik\grid\Module'
    ]       
],
    // 'as access' => [
    //     'class' => 'mdm\admin\components\AccessControl',
    //     'allowActions' => [
    //         'site/*',
    //         'admin/*',
    //         'gii/*',
    //         'data-utama/*',
    //         'riwayat-gaji-berkala/*',
    //         'gaji-berkala/*',
    //     ]
    // ],
];
