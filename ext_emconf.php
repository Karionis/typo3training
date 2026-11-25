<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'TYPO3Training',
    'description' => 'Exercise for creating a site package extension.',
    'category' => 'templates',
    'author' => 'Niklas Kanthak',
    'author_email' => 'niklas.kanthak@online.de',
    'state' => 'stable',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.5',
    'constraints' => [
        'depends' => [
            'typo3' => '12.0.0-13.9.99',
            'news' => '11.0.0-13.9.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
