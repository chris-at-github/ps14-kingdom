<?php
defined('TYPO3_MODE') || die();

call_user_func(static function() {
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
		'Kingdom',
		'Scenario',
		'LLL:EXT:kingdom/Resources/Private/Language/locallang_plugin.xlf:scenario.name',
		'kingdom-plugin-frontend'
	);

	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_kingdom_domain_model_entity');
});
