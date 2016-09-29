<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'ThomasWoehlke.PartnerListing',
            'Partnerlisting',
            'Partner Listing'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extKey, 'Configuration/TypoScript', 'Partner Listing');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_partnerlisting_domain_model_partner', 'EXT:partner_listing/Resources/Private/Language/locallang_csh_tx_partnerlisting_domain_model_partner.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_partnerlisting_domain_model_partner');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_partnerlisting_domain_model_lead', 'EXT:partner_listing/Resources/Private/Language/locallang_csh_tx_partnerlisting_domain_model_lead.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_partnerlisting_domain_model_lead');

    },
    $_EXTKEY
);
