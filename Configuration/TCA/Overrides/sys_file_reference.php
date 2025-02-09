<?php
defined('TYPO3') || die('Access denied.');

/*
call_user_func(
    static function ($extKey, $table) {
        $languageFileBePrefix = 'LLL:EXT:' . $extKey . '/Resources/Private/Language/locallang.xlf:';

        $tca = [
            'columns' => [
                'crop' => [
                    'config' => [
                        'type' => 'imageManipulation',
                        'cropVariants' => [
                            'default' => [
                                'title' => $languageFileBePrefix . 'crop_variants.default',
                                'coverAreas' => [],
                                'cropArea' => [
                                    'x' => '0.0',
                                    'y' => '0.0',
                                    'width' => '1.0',
                                    'height' => '1.0'
                                ],
                                'allowedAspectRatios' => [
                                    '3:2' => [
                                        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.3_2',
                                        'value' => 3 / 2
                                    ],
                                    '2:3' => [
                                        'title' => '2:3',
                                        'value' => 2 / 3
                                    ],
                                    '4:3' => [
                                        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.4_3',
                                        'value' => 4 / 3
                                    ],
                                    '3:4' => [
                                        'title' => '3:4',
                                        'value' => 3 / 4
                                    ],
                                    '1:1' => [
                                        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.1_1',
                                        'value' => 1.0
                                    ],
                                    'NaN' => [
                                        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.free',
                                        'value' => 0.0
                                    ],
                                ],
                                'selectedRatio' => 'NaN'
                            ],
                        ],
                    ],
                ],
            ]
        ];
        $GLOBALS['TCA'][$table] = array_replace_recursive($GLOBALS['TCA'][$table], $tca);
    },
    'typo3training',
    'sys_file_reference'
);
*/

/*
$GLOBALS['TCA']['sys_file_reference']['columns']['crop']['config'] = array(
  'type' => 'imageManipulation',
  'allowedExtensions' => 'jpg',
  'ratios' => array(
      '1.7777777777777777' => '16:9',
      '1.3333333333333333' => '4:3',
      '0.71428571428571' => '5:7',
      '1' => '1:1',
      'NaN' => 'Free',
  ),
);
*/

/*
$GLOBALS['TCA']['sys_file_reference']['columns']['crop'] = array(
  'config' => [
    'type' => 'imageManipulation',
    'cropVariants' => [
        'mobile' => [
            'title' => 'LLL:EXT:typo3training/Resources/Private/Language/locallang.xlf:imageManipulation.mobile',
            'allowedAspectRatios' => [
                '4:3' => [
                    'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.4_3',
                    'value' => 4 / 3
                ],
                'NaN' => [
                    'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.free',
                    'value' => 0.0
                ],
            ],
        ],
        'desktop' => [
            'title' => 'LLL:EXT:typo3training/Resources/Private/Language/locallang.xlf:imageManipulation.desktop',
            'allowedAspectRatios' => [
                '4:3' => [
                    'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.4_3',
                    'value' => 4 / 3
                ],
                'NaN' => [
                    'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.free',
                    'value' => 0.0
                ],
            ],
        ],
    ]
  ]
);
*/
