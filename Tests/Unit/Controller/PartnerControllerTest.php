<?php
namespace ThomasWoehlke\PartnerListing\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Thomas Woehlke <thomas@woehlke.org>
 */
class PartnerControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \ThomasWoehlke\PartnerListing\Controller\PartnerController
     */
    protected $subject = null;

    protected function setUp()
    {
        $this->subject = $this->getMock(\ThomasWoehlke\PartnerListing\Controller\PartnerController::class, ['redirect', 'forward', 'addFlashMessage'], [], '', false);
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllPartnersFromRepositoryAndAssignsThemToView()
    {

        $allPartners = $this->getMock(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class, [], [], '', false);

        $partnerRepository = $this->getMock(\ThomasWoehlke\PartnerListing\Domain\Repository\PartnerRepository::class, ['findAll'], [], '', false);
        $partnerRepository->expects(self::once())->method('findAll')->will(self::returnValue($allPartners));
        $this->inject($this->subject, 'partnerRepository', $partnerRepository);

        $view = $this->getMock(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class);
        $view->expects(self::once())->method('assign')->with('partners', $allPartners);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenPartnerToView()
    {
        $partner = new \ThomasWoehlke\PartnerListing\Domain\Model\Partner();

        $view = $this->getMock(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class);
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('partner', $partner);

        $this->subject->showAction($partner);
    }
}
