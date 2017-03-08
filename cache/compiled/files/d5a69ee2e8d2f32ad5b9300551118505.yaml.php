<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/electric-vehicles-20170308220752/user/config/plugins/email.yaml',
    'modified' => 1488617062,
    'data' => [
        'enabled' => true,
        'from' => 'sergio@electricvehicles.es',
        'from_name' => 'Electric Vehicles Contact Form',
        'to' => 'sergio@electricvehicles.es',
        'to_name' => 'Sergio García',
        'mailer' => [
            'engine' => 'smtp',
            'smtp' => [
                'server' => 'smtp.electricvehicles.es',
                'port' => 25,
                'encryption' => 'none',
                'user' => 'sergio@electricvehicles.es',
                'password' => 's0250201039A'
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => true
    ]
];
