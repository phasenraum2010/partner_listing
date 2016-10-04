<?php
namespace ThomasWoehlke\PartnerListing\Domain\Repository;

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

/**
 * The repository for Partners
 */
class PartnerRepository extends \TYPO3\CMS\Extbase\Persistence\Repository {

    /**
     * @param string $plz
     * @return array|\TYPO3\CMS\Extbase\Persistence\QueryResultInterface
     */
    public function findByPostCode($plz) {
        $query = $this->createQuery();
        $query->matching(
            $query->like('postCode', $plz.'%')
        );
        return $query->execute();
    }

    /**
     * @param string $search
     * @return array|\TYPO3\CMS\Extbase\Persistence\QueryResultInterface
     */
    public function findBySearchterm($search)
    {
        $query = $this->createQuery();
        $query->matching(
            $query->logicalOr(
                $query->like('name', '%'.$search.'%'),
                $query->like('city', '%'.$search.'%'),
                $query->like('contactPerson', '%'.$search.'%'),
                $query->like('info', '%'.$search.'%'),
                $query->like('service', '%'.$search.'%')
            )
        );
        return $query->execute();
    }
}
