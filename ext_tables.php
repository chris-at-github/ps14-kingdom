<?php
defined('TYPO3_MODE') || die();

call_user_func(static function() {

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
        'Kingdom',
        'Frontend',
        'Kingdom Frontend'
    );



    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('kingdom', 'Configuration/TypoScript', 'Kingdom');


    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_kingdom_domain_model_entity', 'EXT:kingdom/Resources/Private/Language/locallang_csh_tx_kingdom_domain_model_entity.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_kingdom_domain_model_entity');

});
