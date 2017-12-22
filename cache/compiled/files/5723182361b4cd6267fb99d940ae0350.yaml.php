<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/margazet/sites/grav/user/config/themes/cardstack.yaml',
    'modified' => 1513536161,
    'data' => [
        'enabled' => true,
        'cardstack_route' => '/cards',
        'default_lang' => 'en',
        'continueLinkIcon' => 'exclamation-circle',
        'cardview' => [
            'columns' => [
                'small' => '1',
                'medium' => '2',
                'large' => '3',
                'xlarge' => '3'
            ]
        ],
        'streams' => [
            'schemes' => [
                'theme' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user/themes/cardstack'
                    ]
                ]
            ]
        ]
    ]
];
