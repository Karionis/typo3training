<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'TYPO3Training',
    'description' => 'Exercise for creating a site package extension.',
    'category' => 'templates',
    'author' => 'Niklas Kanthak',
    'author_email' => 'niklas.kanthak@online.de',
    'state' => 'alpha',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-10.4.99',
            'news' => '9.4.0-9.9.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
