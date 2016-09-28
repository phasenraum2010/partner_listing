<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'ThomasWoehlke.PartnerListing',
            'Partnerlisting',
            [
                'Partner' => 'list, show'
            ],
            // non-cacheable actions
            [
                'Partner' => ''
            ]
        );

    },
    $_EXTKEY
);
