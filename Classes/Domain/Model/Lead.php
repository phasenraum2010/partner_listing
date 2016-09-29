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
 * Lead
 */
class Lead extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * name
     *
     * @var string
     */
    protected $name = '';

    /**
     * email
     *
     * @var string
     */
    protected $email = '';

    /**
     * street
     *
     * @var string
     */
    protected $street = '';

    /**
     * postCodeAndCity
     *
     * @var string
     */
    protected $postCodeAndCity = '';

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
     * message
     *
     * @var string
     */
    protected $message = '';

    /**
     * the Partner who will receive the message sent by the visitor.
     *
     * @var \ThomasWoehlke\PartnerListing\Domain\Model\Partner
     */
    protected $receiver = null;

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
     * Returns the postCodeAndCity
     *
     * @return string $postCodeAndCity
     */
    public function getPostCodeAndCity()
    {
        return $this->postCodeAndCity;
    }

    /**
     * Sets the postCodeAndCity
     *
     * @param string $postCodeAndCity
     * @return void
     */
    public function setPostCodeAndCity($postCodeAndCity)
    {
        $this->postCodeAndCity = $postCodeAndCity;
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
     * Returns the message
     *
     * @return string $message
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Sets the message
     *
     * @param string $message
     * @return void
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * Returns the receiver
     *
     * @return \ThomasWoehlke\PartnerListing\Domain\Model\Partner $receiver
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * Sets the receiver
     *
     * @param \ThomasWoehlke\PartnerListing\Domain\Model\Partner $receiver
     * @return void
     */
    public function setReceiver(\ThomasWoehlke\PartnerListing\Domain\Model\Partner $receiver)
    {
        $this->receiver = $receiver;
    }
}
