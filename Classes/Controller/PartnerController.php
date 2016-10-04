<?php
namespace ThomasWoehlke\PartnerListing\Controller;

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
 * PartnerController
 */
class PartnerController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * partnerRepository
     *
     * @var \ThomasWoehlke\PartnerListing\Domain\Repository\PartnerRepository
     * @inject
     */
    protected $partnerRepository = null;

    /**
     * action list
     * @param string $plz
     * @param string $search
     * @return void
     */
    public function listAction($plz=null,$search='')
    {
        if($plz==null && $search==''){
            $partners = $this->partnerRepository->findAll();
            $this->view->assign('partners', $partners);
        } else {
            if ($plz!=null) {
                if (ctype_digit($plz) && (strlen($plz) == 1)) {
                    $this->addFlashMessage($plz, 'PLZ', \TYPO3\CMS\Core\Messaging\AbstractMessage::INFO, false);
                    $partners = $this->partnerRepository->findByPostCode($plz);
                    $this->view->assign('partners', $partners);
                }
            }
            if ($search!=''){
                $flashMessage = 'Suchergebnis';
                $this->addFlashMessage($flashMessage, $search , \TYPO3\CMS\Core\Messaging\AbstractMessage::INFO, false);
                $partners = $this->partnerRepository->findBySearchterm($search);
                $this->view->assign('partners', $partners);
            }
        }
    }

    /**
     * action show
     *
     * @param \ThomasWoehlke\PartnerListing\Domain\Model\Partner $partner
     * @return void
     */
    public function showAction(\ThomasWoehlke\PartnerListing\Domain\Model\Partner $partner)
    {
        $this->view->assign('partner', $partner);
    }
}
