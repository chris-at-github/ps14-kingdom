<?php
defined('TYPO3_MODE') || die();

call_user_func(function() {
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
		'Kingdom',
		'Frontend',
		[
			\Ps14\Kingdom\Controller\ScenarioController::class => 'index',
			\Ps14\Kingdom\Controller\GameController::class => 'index',
			\Ps14\Kingdom\Controller\EntityController::class => 'list, show'
		],
		[
			\Ps14\Kingdom\Controller\GameController::class => 'index',
			\Ps14\Kingdom\Controller\EntityController::class => ''
		]
	);

	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
		'Kingdom',
		'Scenario',
		[
			\Ps14\Kingdom\Controller\ScenarioController::class => 'listing',
		],
		[]
	);

	// -------------------------------------------------------------------------------------------------------------------
	// PageTs
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
		'<INCLUDE_TYPOSCRIPT: source="FILE:EXT:kingdom/Configuration/TSConfig/Page.typoscript">'
	);

	// -------------------------------------------------------------------------------------------------------------------
	// Icons
	$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
	$iconRegistry->registerIcon(
		'kingdom-plugin-frontend',
		\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
		['source' => 'EXT:kingdom/Resources/Public/Icons/plugin_frontend.svg']
	);
}
);
