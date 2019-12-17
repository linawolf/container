<?php

$additionalColumns = [
    'tx_container_parent' => [
        'label' => 'Container',
        'config' => [
            'default' => 0,
            'type' => 'select',
            'itemsProcFunc' => \B13\Container\Tca\ItemProcFunc::class . '->txContainerParent',
            'renderType' => 'selectSingle'
        ]
    ]
];


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
    'tt_content',
     $additionalColumns
);


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'tt_content',
    'general',
    'tx_container_parent'
);

$GLOBALS['TCA']['tt_content']['columns']['colPos']['config']['itemsProcFunc'] = \B13\Container\Tca\ItemProcFunc::class . '->colPos';
// copyAfterDuplFields colPos,sys_language_uid
// useColumnsForDefaultValues colPos,sys_language_uid,CType
$GLOBALS['TCA']['tt_content']['ctrl']['useColumnsForDefaultValues'] .= ',tx_container_parent';
