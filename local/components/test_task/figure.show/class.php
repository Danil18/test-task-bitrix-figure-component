<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

class FigureShowComponent extends CBitrixComponent
{
    public function onPrepareComponentParams($arParams): array
    {
        $arParams = parent::onPrepareComponentParams($arParams);

        $arParams['FIGURE_TYPE'] = in_array($arParams['FIGURE_TYPE'], ['circle', 'square'])
            ? $arParams['FIGURE_TYPE']
            : 'circle';

        $arParams['CACHE_TIME'] = (int)($arParams['CACHE_TIME'] ?? 3600);

        return $arParams;
    }

    public function executeComponent()
    {
        if ($this->startResultCache($this->arParams['CACHE_TIME'])) {
            $this->prepareData();
            $this->includeComponentTemplate();
            $this->endResultCache();
        }
    }

    private function prepareData(): void
    {
        $this->arResult = [
            'FIGURE_TYPE' => $this->arParams['FIGURE_TYPE'],
            'CSS_CLASS' => 'figure-' . $this->arParams['FIGURE_TYPE']
        ];
    }
}