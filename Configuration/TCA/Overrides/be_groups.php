<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

$tempColumns = [
    'tx_begroupsroles_isrole' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:begroups_roles/Resources/Private/Language/locallang_db.xlf:be_groups.tx_begroupsroles_isrole',
        'config' => [
            'type' => 'check',
            'default' => 0,
        ],
    ],
];
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('be_groups', $tempColumns);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette('be_groups', 'tx_begroupsroles', 'tx_begroupsroles_isrole');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('be_groups', '--palette--;LLL:EXT:begroups_roles/Resources/Private/Language/locallang_db.xlf:be_groups.tx_begroupsroles_title;tx_begroupsroles', '', 'after:subgroup');
