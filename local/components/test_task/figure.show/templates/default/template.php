<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/** @var array $arResult */
/** @var CMain $APPLICATION */
/** @var CBitrixComponent $component */

$this->addExternalCss($this->GetFolder() . '/style.css');
?>

<div class="test-task-figure <?= $arResult['CSS_CLASS'] ?>"></div>