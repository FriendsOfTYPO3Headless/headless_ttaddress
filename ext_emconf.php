<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Headless tt_address',
    'description' => 'This extension provides integration with tt_address to output content from TYPO3 in JSON format.',
    'state' => 'stable',
    'author' => 'Sven Petersen',
    'author_email' => 'sven@hardanders.de',
    'category' => 'fe',
    'internal' => '',
    'version' => '0.1.0',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-11.5.99',
            'frontend' => '10.4.0-11.5.99',
        ],
        'conflicts' => [],
        'suggests' => [
            'headless' => '2.6.0-3.0.99',
            'tt_address' => '5.3.0-6.0.99'
        ]
    ],
];
