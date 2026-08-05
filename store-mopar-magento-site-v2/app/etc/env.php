<?php
return [
    'backend' => [
        'frontName' => 'admin_m61i7g1'
    ],
    'remote_storage' => [
        'driver' => 'file'
    ],
    'cache' => [
        'graphql' => [
            'id_salt' => 'lNArkIjob3qJioqrihquDyiRnhPUMUux'
        ],
        'frontend' => [
            'default' => [
                'id_prefix' => '69d_',
                'backend_options' => [
                    'serializer' => 'igbinary'
                ]
            ],
            'page_cache' => [
                'id_prefix' => '69d_',
                'backend_options' => [
                    'serializer' => 'igbinary'
                ]
            ]
        ]
    ],
    'config' => [
        'async' => 0
    ],
    'queue' => [
        'consumers_wait_for_messages' => 1
    ],
    'crypt' => [
        'key' => 'base64w3ewR91CZl9sCwhAAJ2lTfG5WnPwrrEgTc42X3j9RwQ='
    ],
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => 'db',
                'dbname' => 'db',
                'username' => 'db',
                'password' => 'db',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'active' => '1',
                'driver_options' => [
                    1014 => false
                ]
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'developer',
    'session' => [
        'save' => 'files'
    ],
    'lock' => [
        'provider' => 'db'
    ],
    'directories' => [
        'document_root_is_pub' => true
    ],
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'compiled_config' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'graphql_query_resolver_result' => 1,
        'full_page' => 0,
        'config_webservice' => 1,
        'translate' => 1
    ],
    'downloadable_domains' => [
        'store-mopar-magento-site-v2.ddev.site'
    ],
    'install' => [
        'date' => 'Thu, 30 Jul 2026 02:50:29 +0000'
    ]
];
