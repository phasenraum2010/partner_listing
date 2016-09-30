<?php

/***
 *
 * This file is part of the "Partner Listing" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2016 Thomas Woehlke <thomas@woehlke.org>, faktura gGmbH
 *
 ***/

namespace ThomasWoehlke\PartnerListing\Custom;

/**
 * partner_listing RealURL configuraiton.
 *
 * @package TYPO3
 */
class Realurl {

    /**
     * Generates additional RealURL configuration and merges it with provided configuration
     *
     * @param array $params Default configuration
     * @param tx_realurl_autoconfgen $pObj Parent object
     * @return array Updated configuration
     */
    public function addAutoConfig( $params, &$pObj ){

        $params['config']['init']['emptySegmentValue'] = '';

        return array_merge_recursive( $params['config'], array(
            'postVarSets' => array(
                '_DEFAULT' => array(
                    'partner' => array(
                        array(
                            'GETvar' => 'tx_partnerlisting_partnerlisting[controller]',
                            'valueMap' => array(
                                'studio' => 'Partner',
                            ),
                            'noMatch' => 'bypass',
                        ),
                        array(
                            'GETvar' => 'tx_partnerlisting_partnerlisting[action]',
                            'noMatch' => 'bypass',
                        ),
                        array(
                            'GETvar' => 'tx_partnerlisting_partnerlisting[partner]',
                            'lookUpTable' => array(
                                'table' => 'tx_partnerlisting_domain_model_partner',
                                'id_field' => 'uid',
                                'alias_field' => 'url_part',
                                'useUniqueCache' => 1,
                                'useUniqueCache_conf' => array(
                                    'strtolower' => 1,
                                    'spaceCharacter' => '-'
                                )
                            ),
                        ),
                    ),
                ),
            ),
        ) );
    }

}
