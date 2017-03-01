<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/grav-electric-vehicles/user/config/plugins/git-sync.yaml',
    'modified' => 1488369364,
    'data' => [
        'enabled' => true,
        'text_var' => 'Custom Text added by the **Git Sync** plugin (disable plugin to remove)',
        'folders' => [
            0 => 'pages'
        ],
        'repository' => 'https://github.com/aaromnido/grav-electric-vehicles.git',
        'user' => 'aaromnido@gmail.com',
        'password' => 'gitsync-def50200e56802a015163cca41010f6d276cd65e15fcb24394a29517b9ebfc6c3fc05332da532c5352dfbc9f70f8cfcb9eb20f48b805fbcd1e385b4c07495089071aa7955b79a491b480744d6503f6b2d1cd7567aa27940fc72c122f5fc2356a60',
        'webhook' => '/_git-sync',
        'branch' => 'master',
        'remote' => [
            'name' => 'origin',
            'branch' => 'master'
        ],
        'git' => [
            'author' => 'gituser',
            'name' => 'GitSync',
            'email' => 'aaromnido@gmail.com',
            'bin' => 'git'
        ],
        'logging' => false
    ]
];
