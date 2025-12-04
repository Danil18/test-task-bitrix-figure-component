<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);

$arComponentParameters = [
    'PARAMETERS' => [
        'FIGURE_TYPE' => [
            'NAME' => Loc::getMessage('TEST_TASK_FIGURE_SHOW_PARAM_TYPE'),
            'TYPE' => 'LIST',
            'VALUES' => [
                'circle' => Loc::getMessage('TEST_TASK_FIGURE_SHOW_TYPE_CIRCLE'),
                'square' => Loc::getMessage('TEST_TASK_FIGURE_SHOW_TYPE_SQUARE')
            ],
            'DEFAULT' => 'circle',
            'REFRESH' => 'N'
        ],
        'CACHE_TIME' => [
            'DEFAULT' => 3600
        ]
    ]
];