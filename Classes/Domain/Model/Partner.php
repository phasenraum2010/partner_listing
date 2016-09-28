<?php
namespace ThomasWoehlke\PartnerListing\Domain\Model;

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
 * Partner
 */
class Partner extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * name
     *
     * @var string
     */
    protected $name = '';

    /**
     * urlPart
     *
     * @var string
     */
    protected $urlPart = '';

    /**
     * email
     *
     * @var string
     */
    protected $email = '';

    /**
     * phone
     *
     * @var string
     */
    protected $phone = '';

    /**
     * fax
     *
     * @var string
     */
    protected $fax = '';

    /**
     * street
     *
     * @var string
     */
    protected $street = '';

    /**
     * postCode
     *
     * @var string
     */
    protected $postCode = '';

    /**
     * city
     *
     * @var string
     */
    protected $city = '';

    /**
     * contactPerson
     *
     * @var string
     */
    protected $contactPerson = '';

    /**
     * country
     *
     * @var string
     */
    protected $country = '';

    /**
     * info
     *
     * @var string
     */
    protected $info = '';

    /**
     * infoImage
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @cascade remove
     */
    protected $infoImage = null;

    /**
     * service
     *
     * @var string
     */
    protected $service = '';

    /**
     * serviceImage
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @cascade remove
     */
    protected $serviceImage = null;

    /**
     * contactImage
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @cascade remove
     */
    protected $contactImage = null;

    /**
     * imprint
     *
     * @var string
     */
    protected $imprint = '';

    /**
     * termsAndConditions
     *
     * @var string
     */
    protected $termsAndConditions = '';

    /**
     * Returns the name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the urlPart
     *
     * @return string $urlPart
     */
    public function getUrlPart()
    {
        return $this->urlPart;
    }

    /**
     * Sets the urlPart
     *
     * @param string $urlPart
     * @return void
     */
    public function setUrlPart($urlPart)
    {
        $this->urlPart = $urlPart;
    }

    /**
     * Returns the email
     *
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets the email
     *
     * @param string $email
     * @return void
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Returns the phone
     *
     * @return string $phone
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Sets the phone
     *
     * @param string $phone
     * @return void
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * Returns the fax
     *
     * @return string $fax
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Sets the fax
     *
     * @param string $fax
     * @return void
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
    }

    /**
     * Returns the street
     *
     * @return string $street
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Sets the street
     *
     * @param string $street
     * @return void
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * Returns the postCode
     *
     * @return string $postCode
     */
    public function getPostCode()
    {
        return $this->postCode;
    }

    /**
     * Sets the postCode
     *
     * @param string $postCode
     * @return void
     */
    public function setPostCode($postCode)
    {
        $this->postCode = $postCode;
    }

    /**
     * Returns the city
     *
     * @return string $city
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Sets the city
     *
     * @param string $city
     * @return void
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * Returns the contactPerson
     *
     * @return string $contactPerson
     */
    public function getContactPerson()
    {
        return $this->contactPerson;
    }

    /**
     * Sets the contactPerson
     *
     * @param string $contactPerson
     * @return void
     */
    public function setContactPerson($contactPerson)
    {
        $this->contactPerson = $contactPerson;
    }

    /**
     * Returns the country
     *
     * @return string $country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets the country
     *
     * @param string $country
     * @return void
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * Returns the info
     *
     * @return string $info
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Sets the info
     *
     * @param string $info
     * @return void
     */
    public function setInfo($info)
    {
        $this->info = $info;
    }

    /**
     * Returns the infoImage
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $infoImage
     */
    public function getInfoImage()
    {
        return $this->infoImage;
    }

    /**
     * Sets the infoImage
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $infoImage
     * @return void
     */
    public function setInfoImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $infoImage)
    {
        $this->infoImage = $infoImage;
    }

    /**
     * Returns the service
     *
     * @return string $service
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Sets the service
     *
     * @param string $service
     * @return void
     */
    public function setService($service)
    {
        $this->service = $service;
    }

    /**
     * Returns the serviceImage
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $serviceImage
     */
    public function getServiceImage()
    {
        return $this->serviceImage;
    }

    /**
     * Sets the serviceImage
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $serviceImage
     * @return void
     */
    public function setServiceImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $serviceImage)
    {
        $this->serviceImage = $serviceImage;
    }

    /**
     * Returns the contactImage
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $contactImage
     */
    public function getContactImage()
    {
        return $this->contactImage;
    }

    /**
     * Sets the contactImage
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $contactImage
     * @return void
     */
    public function setContactImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $contactImage)
    {
        $this->contactImage = $contactImage;
    }

    /**
     * Returns the imprint
     *
     * @return string $imprint
     */
    public function getImprint()
    {
        return $this->imprint;
    }

    /**
     * Sets the imprint
     *
     * @param string $imprint
     * @return void
     */
    public function setImprint($imprint)
    {
        $this->imprint = $imprint;
    }

    /**
     * Returns the termsAndConditions
     *
     * @return string $termsAndConditions
     */
    public function getTermsAndConditions()
    {
        return $this->termsAndConditions;
    }

    /**
     * Sets the termsAndConditions
     *
     * @param string $termsAndConditions
     * @return void
     */
    public function setTermsAndConditions($termsAndConditions)
    {
        $this->termsAndConditions = $termsAndConditions;
    }
}
