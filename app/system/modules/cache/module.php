<?php

return [

    'name' => 'system/cache',

    'main' => 'Pagekit\\Cache\\CacheModule',

    'autoload' => [

        'Pagekit\\Cache\\' => 'src'

    ],

    'routes' => [

        '/system/cache' => [
            'name' => '@system/cache',
            'controller' => 'Pagekit\\Cache\\Controller\\CacheController'
        ]

    ],

    'config' => [

        'caches' => [],
        'nocache' => false

    ]

];
