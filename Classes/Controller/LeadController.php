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

    /**
     * action new
     *
     * @return void
     */
    public function newAction()
    {

    }

    /**
     * action create
     *
     * @param \ThomasWoehlke\PartnerListing\Domain\Model\Lead $newLead
     * @return void
     */
    public function createAction(\ThomasWoehlke\PartnerListing\Domain\Model\Lead $newLead)
    {
        $this->leadRepository->add($newLead);
        $arguments = array( 'partner' => $newLead->getReceiver());

        $emailBody  = "Dieses ist eine Nachricht von ihrer Webseite bei Lentree Cosmetique: \n\n";
        $emailBody .= "Ihre Webseite: http://lentreetest1.biomeddeluxe.de/studios/partner/".$newLead->getReceiver()->getUrlPart()." \n";
        $emailBody .= "Name:          ".$newLead->getName()." \n";
        $emailBody .= "Email:         ".$newLead->getEmail()." \n";
        $emailBody .= "Strasse:       ".$newLead->getStreet()." \n";
        $emailBody .= "PLZ, Ort:      ".$newLead->getPostCodeAndCity()." \n";
        $emailBody .= "Telefon:       ".$newLead->getPhone()." \n";
        $emailBody .= "Fax:           ".$newLead->getFax()." \n";
        $emailBody .= "Nachricht: \n".$newLead->getMessage()." \n\n";
        $emailBody .= "Mit freundlichen Grüßen\n\n";
        $emailBody .= "Ihr Team von Lentree Cosmetique\n";
        $emailBody .= "http://www.lentreecosmetique.de\n";

        $mail = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Core\\Mail\\MailMessage');
        $mail->setSubject('Nachricht von ihrer Webseite bei Lentree Cosmetique');
        $mail->setFrom(array($newLead->getEmail() => $newLead->getName()));
        $mail->setTo(array($newLead->getReceiver()->getEmail() => $newLead->getReceiver()->getName()));
        $mail->setBody($emailBody);
        $mail->send();

        $flashMessage = 'Ihre Nachricht wurde an '.$newLead->getReceiver()->getName().' versandt';

        $this->addFlashMessage($flashMessage, '', \TYPO3\CMS\Core\Messaging\AbstractMessage::OK, false);

        $this->redirect('show','Partner',null,$arguments);
    }
}
