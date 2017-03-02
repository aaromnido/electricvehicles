<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/electricvehicles/user/config/plugins/email.yaml',
    'modified' => 1488454627,
    'data' => [
        'enabled' => true,
        'from' => 'aaromnido@gmail.com',
        'from_name' => 'From Fernando Val ',
        'to' => 'aaromnido@gmail.com',
        'to_name' => 'To Fernando Val',
        'mailer' => [
            'engine' => 'mail',
            'smtp' => [
                'server' => 'localhost',
                'port' => 25,
                'encryption' => 'none',
                'user' => 'aaromnido@gmail.com',
                'password' => 'Aaromnido6969'
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => true
    ]
];
