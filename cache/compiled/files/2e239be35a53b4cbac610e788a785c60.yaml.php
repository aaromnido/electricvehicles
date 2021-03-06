<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/electric-vehicles-20170308220752/user/plugins/admin/blueprints/admin/pages/move.yaml',
    'modified' => 1488617062,
    'data' => [
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'route' => [
                    'type' => 'select',
                    'label' => 'PLUGIN_ADMIN.PARENT',
                    'classes' => 'fancy',
                    'data-options@' => '\\Grav\\Common\\Page\\Pages::parentsRawRoutes',
                    'data-default@' => '\\Grav\\Plugin\\Admin\\Admin::rawRoute',
                    'options' => [
                        '/' => 'PLUGIN_ADMIN.DEFAULT_OPTION_ROOT'
                    ]
                ]
            ]
        ]
    ]
];
