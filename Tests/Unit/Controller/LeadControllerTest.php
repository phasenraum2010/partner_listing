<?php
namespace ThomasWoehlke\PartnerListing\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Thomas Woehlke <thomas@woehlke.org>
 */
class LeadControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \ThomasWoehlke\PartnerListing\Controller\LeadController
     */
    protected $subject = null;

    protected function setUp()
    {
        $this->subject = $this->getMock(\ThomasWoehlke\PartnerListing\Controller\LeadController::class, ['redirect', 'forward', 'addFlashMessage'], [], '', false);
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllLeadsFromRepositoryAndAssignsThemToView()
    {

        $allLeads = $this->getMock(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class, [], [], '', false);

        $leadRepository = $this->getMock(\ThomasWoehlke\PartnerListing\Domain\Repository\LeadRepository::class, ['findAll'], [], '', false);
        $leadRepository->expects(self::once())->method('findAll')->will(self::returnValue($allLeads));
        $this->inject($this->subject, 'leadRepository', $leadRepository);

        $view = $this->getMock(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class);
        $view->expects(self::once())->method('assign')->with('leads', $allLeads);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenLeadToView()
    {
        $lead = new \ThomasWoehlke\PartnerListing\Domain\Model\Lead();

        $view = $this->getMock(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class);
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('lead', $lead);

        $this->subject->showAction($lead);
    }
}
