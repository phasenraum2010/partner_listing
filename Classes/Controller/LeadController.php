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
 * LeadController
 */
class LeadController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * leadRepository
     *
     * @var \ThomasWoehlke\PartnerListing\Domain\Repository\LeadRepository
     * @inject
     */
    protected $leadRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $leads = $this->leadRepository->findAll();
        $this->view->assign('leads', $leads);
    }

    /**
     * action show
     *
     * @param \ThomasWoehlke\PartnerListing\Domain\Model\Lead $lead
     * @return void
     */
    public function showAction(\ThomasWoehlke\PartnerListing\Domain\Model\Lead $lead)
    {
        $this->view->assign('lead', $lead);
    }
}
