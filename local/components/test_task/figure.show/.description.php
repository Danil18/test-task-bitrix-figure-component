<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);

$arComponentDescription = [
    'NAME' => Loc::getMessage('TEST_TASK_FIGURE_SHOW_NAME'),
    'DESCRIPTION' => Loc::getMessage('TEST_TASK_FIGURE_SHOW_DESCRIPTION'),
    'PATH' => [
        'ID' => 'test_task',
        'NAME' => Loc::getMessage('TEST_TASK_FIGURE_SHOW_CATEGORY'),
    ]
];