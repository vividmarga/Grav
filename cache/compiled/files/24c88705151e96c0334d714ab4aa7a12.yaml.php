<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/margazet/sites/grav/user/themes/cardstack/blueprints/card.yaml',
    'modified' => 1513536100,
    'data' => [
        'title' => 'Card',
        '@extends' => [
            'type' => 'default',
            'context' => 'blueprints://pages'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'options' => [
                            'fields' => [
                                'publishing' => [
                                    'fields' => [
                                        'header.publish_date' => [
                                            'default' => 'now'
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'blog' => [
                            'type' => 'tab',
                            'title' => 'Card',
                            'fields' => [
                                'subtitle_section' => [
                                    'type' => 'section',
                                    'title' => 'Subtitle',
                                    'underline' => true
                                ],
                                'header.subtitle' => [
                                    'type' => 'text',
                                    'label' => 'Display Subtitle',
                                    'toggleable' => true,
                                    'help' => 'What is this card\'s subtitle?',
                                    'placeholder' => 'Subtitle'
                                ],
                                'author_section' => [
                                    'type' => 'section',
                                    'title' => 'Author',
                                    'underline' => true
                                ],
                                'header.author.name' => [
                                    'type' => 'text',
                                    'label' => 'Display Author',
                                    'toggleable' => true,
                                    'help' => 'Enabled displaying of author\'s name',
                                    'placeholder' => 'Name of Author'
                                ],
                                'header.author.email' => [
                                    'type' => 'text',
                                    'label' => 'Author\'s Email',
                                    'toggleable' => true,
                                    'help' => 'Enabled displaying of author\'s email',
                                    'placeholder' => 'Email of Author'
                                ],
                                'link_section' => [
                                    'type' => 'section',
                                    'title' => 'Links',
                                    'underline' => true
                                ],
                                'header.link' => [
                                    'type' => 'text',
                                    'label' => 'Link URL',
                                    'toggleable' => true,
                                    'help' => 'Set the link you wish to link to',
                                    'placeholder' => 'Link URL'
                                ],
                                'header.continue_link' => [
                                    'type' => 'toggle',
                                    'toggleable' => true,
                                    'label' => 'Show Continue Icon',
                                    'highlight' => true,
                                    'help' => 'Change the icon in theme preferences',
                                    'options' => [
                                        1 => 'Show',
                                        0 => 'Hide'
                                    ]
                                ],
                                'header.override_link_icon' => [
                                    'type' => 'text',
                                    'toggleable' => true,
                                    'label' => 'Override Link Icon',
                                    'help' => 'Change the icon in theme preferences',
                                    'placeholder' => 'Continue Link Icon'
                                ],
                                'header_image' => [
                                    'type' => 'section',
                                    'title' => 'Card Image',
                                    'underline' => true
                                ],
                                'header.header_image' => [
                                    'type' => 'toggle',
                                    'toggleable' => true,
                                    'label' => 'Display Card Image',
                                    'help' => 'Enabled displaying of a header image',
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'Enabled',
                                        0 => 'Disabled'
                                    ]
                                ],
                                'header.header_image_file' => [
                                    'type' => 'pagemediaselect',
                                    'toggleable' => true,
                                    'label' => 'Choose Image',
                                    'help' => 'Upload media on the Content tab, deselect to use default image',
                                    'placeholder' => 'For example: myimage.jpg'
                                ],
                                'sources' => [
                                    'type' => 'section',
                                    'title' => 'Sources',
                                    'underline' => true
                                ],
                                'header.via.text' => [
                                    'type' => 'text',
                                    'toggleable' => true,
                                    'label' => 'Via Title'
                                ],
                                'header.via.url' => [
                                    'type' => 'text',
                                    'label' => 'Via URL',
                                    'toggleable' => true
                                ],
                                'header.sources' => [
                                    'type' => 'list',
                                    'label' => 'Sources',
                                    'fields' => [
                                        '.url' => [
                                            'type' => 'text',
                                            'label' => 'URL'
                                        ],
                                        '.text' => [
                                            'type' => 'text',
                                            'label' => 'Text'
                                        ]
                                    ]
                                ],
                                'summary' => [
                                    'type' => 'section',
                                    'title' => 'Summary',
                                    'underline' => true
                                ],
                                'header.summary.enabled' => [
                                    'type' => 'toggle',
                                    'toggleable' => true,
                                    'label' => 'Summary',
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'Enabled',
                                        0 => 'Disabled'
                                    ]
                                ],
                                'header.summary.format' => [
                                    'type' => 'select',
                                    'toggleable' => true,
                                    'label' => 'Format',
                                    'classes' => 'fancy',
                                    'options' => [
                                        'short' => 'Use the first occurence of delimter or size',
                                        'long' => 'Summary delimiter will be ignored'
                                    ]
                                ],
                                'header.summary.size' => [
                                    'type' => 'text',
                                    'toggleable' => true,
                                    'label' => 'Size',
                                    'classes' => 'large',
                                    'placeholder' => 300,
                                    'validate' => [
                                        'type' => 'int',
                                        'min' => 1
                                    ]
                                ],
                                'header.summary.delimiter' => [
                                    'type' => 'text',
                                    'toggleable' => true,
                                    'label' => 'Summary delimiter',
                                    'classes' => 'large',
                                    'placeholder' => '==='
                                ],
                                'header.summary.strip_tags' => [
                                    'type' => 'select',
                                    'toggleable' => true,
                                    'label' => 'Strip HTML Tags',
                                    'size' => 'small',
                                    'help' => 'Removes all HTML tags from the summary',
                                    'options' => [
                                        1 => 'Yes',
                                        0 => 'No'
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
