<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/electric-vehicles-20170308220752/user/config/site.yaml',
    'modified' => 1488617062,
    'data' => [
        'title' => 'Electric Vehicles',
        'default_lang' => 'es',
        'author' => [
            'name' => 'Sergio García',
            'email' => 'aaromnido@gmail.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Grav is an easy to use, yet powerful, open source flat-file CMS'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
