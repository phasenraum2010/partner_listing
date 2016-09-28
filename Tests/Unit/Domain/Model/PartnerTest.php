<?php
namespace ThomasWoehlke\PartnerListing\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Thomas Woehlke <thomas@woehlke.org>
 */
class PartnerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \ThomasWoehlke\PartnerListing\Domain\Model\Partner
     */
    protected $subject = null;

    protected function setUp()
    {
        $this->subject = new \ThomasWoehlke\PartnerListing\Domain\Model\Partner();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );

    }

    /**
     * @test
     */
    public function setNameForStringSetsName()
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'name',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getUrlPartReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getUrlPart()
        );

    }

    /**
     * @test
     */
    public function setUrlPartForStringSetsUrlPart()
    {
        $this->subject->setUrlPart('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'urlPart',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getEmailReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getEmail()
        );

    }

    /**
     * @test
     */
    public function setEmailForStringSetsEmail()
    {
        $this->subject->setEmail('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'email',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getPhoneReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPhone()
        );

    }

    /**
     * @test
     */
    public function setPhoneForStringSetsPhone()
    {
        $this->subject->setPhone('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'phone',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getFaxReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getFax()
        );

    }

    /**
     * @test
     */
    public function setFaxForStringSetsFax()
    {
        $this->subject->setFax('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'fax',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getStreetReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getStreet()
        );

    }

    /**
     * @test
     */
    public function setStreetForStringSetsStreet()
    {
        $this->subject->setStreet('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'street',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getPostCodeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPostCode()
        );

    }

    /**
     * @test
     */
    public function setPostCodeForStringSetsPostCode()
    {
        $this->subject->setPostCode('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'postCode',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getCityReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getCity()
        );

    }

    /**
     * @test
     */
    public function setCityForStringSetsCity()
    {
        $this->subject->setCity('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'city',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getCountryReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getCountry()
        );

    }

    /**
     * @test
     */
    public function setCountryForStringSetsCountry()
    {
        $this->subject->setCountry('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'country',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getContactPersonReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getContactPerson()
        );

    }

    /**
     * @test
     */
    public function setContactPersonForStringSetsContactPerson()
    {
        $this->subject->setContactPerson('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'contactPerson',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getInfoReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getInfo()
        );

    }

    /**
     * @test
     */
    public function setInfoForStringSetsInfo()
    {
        $this->subject->setInfo('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'info',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getInfoImageReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getInfoImage()
        );

    }

    /**
     * @test
     */
    public function setInfoImageForFileReferenceSetsInfoImage()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setInfoImage($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'infoImage',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getServiceReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getService()
        );

    }

    /**
     * @test
     */
    public function setServiceForStringSetsService()
    {
        $this->subject->setService('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'service',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getServiceImageReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getServiceImage()
        );

    }

    /**
     * @test
     */
    public function setServiceImageForFileReferenceSetsServiceImage()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setServiceImage($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'serviceImage',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getContactImageReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getContactImage()
        );

    }

    /**
     * @test
     */
    public function setContactImageForFileReferenceSetsContactImage()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setContactImage($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'contactImage',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getImprintReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getImprint()
        );

    }

    /**
     * @test
     */
    public function setImprintForStringSetsImprint()
    {
        $this->subject->setImprint('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'imprint',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getTermsAndConditionsReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTermsAndConditions()
        );

    }

    /**
     * @test
     */
    public function setTermsAndConditionsForStringSetsTermsAndConditions()
    {
        $this->subject->setTermsAndConditions('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'termsAndConditions',
            $this->subject
        );

    }
}
