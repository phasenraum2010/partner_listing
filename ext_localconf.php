<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'ThomasWoehlke.PartnerListing',
            'Partnerlisting',
            [
                'Partner' => 'list, show',
                'Lead' => 'list, show, new, create'
            ],
            // non-cacheable actions
            [
                'Partner' => 'list, show',
                'Lead' => 'list, show, new, create'
            ]
        );

    },
    $_EXTKEY
);


/**
 * Add RealURL configuration
 */

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/realurl/class.tx_realurl_autoconfgen.php']['extensionConfiguration']['partner_listing'] =
    'EXT:partner_listing/Classes/Custom/Realurl.php:ThomasWoehlke\\PartnerListing\\Custom\\Realurl->addAutoConfig';


