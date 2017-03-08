<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/electric-vehicles-20170308220752/user/config/plugins/backup-manager.yaml',
    'modified' => 1488371394,
    'data' => [
        'enabled' => true,
        'backup' => [
            'testmode' => [
                'enabled' => false,
                'compressionratio' => 1.1999999999999999555910790149937383830547332763671875
            ],
            'phptimeout' => 600,
            'storage' => [
                'maxspace' => 10,
                'keepdays' => 10,
                'showbackups' => 50
            ],
            'log' => true,
            'ignore' => [
                'foldercase' => true,
                'toplevelintersect' => false,
                'foldersintersect' => false,
                'forceaddasempty' => false
            ]
        ]
    ]
];
