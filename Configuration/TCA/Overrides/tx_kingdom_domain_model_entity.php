<?php
defined('TYPO3_MODE') || die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::makeCategorizable(
	'kingdom',
	'tx_kingdom_domain_model_entity'
);
