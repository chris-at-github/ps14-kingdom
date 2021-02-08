<?php
defined('TYPO3_MODE') || die();

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Kingdom',
            'Frontend',
            [
                \Ps14\Kingdom\Controller\EntityController::class => 'list, show'
            ],
            // non-cacheable actions
            [
                \Ps14\Kingdom\Controller\EntityController::class => ''
            ]
        );

        // wizards
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            'mod {
                wizards.newContentElement.wizardItems.plugins {
                    elements {
                        frontend {
                            iconIdentifier = kingdom-plugin-frontend
                            title = LLL:EXT:kingdom/Resources/Private/Language/locallang_db.xlf:tx_kingdom_frontend.name
                            description = LLL:EXT:kingdom/Resources/Private/Language/locallang_db.xlf:tx_kingdom_frontend.description
                            tt_content_defValues {
                                CType = list
                                list_type = kingdom_frontend
                            }
                        }
                    }
                    show = *
                }
           }'
        );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'kingdom-plugin-frontend',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:kingdom/Resources/Public/Icons/user_plugin_frontend.svg']
			);
		
    }
);
