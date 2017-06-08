<?php
/**
 * Created by PhpStorm.
 * User: Julien
 * Date: 29/04/2017
 * Time: 17:08
 */

namespace Domain\PostalAddress\Action;


use JulienVinber\Domain\AbstractAction;

class PostalAddressCreateAction extends AbstractAction
{
    /**
     * Adresse
     * @var string
     */
    private $streetAddress;

    /**
     * Code postale
     * @var string
     */
    private $postalCode;

    /**
     * Ville
     * @var string
     */
    private $addressLocality;

    /**
     * Pays
     * @var string
     */
    private $addressCountry;

    /**
     * PostalAddress constructor.
     */
    public function __construct()
    {
        $this->streetAddress = '';
        $this->postalCode = '';
        $this->addressLocality = '';
        $this->addressCountry = '';
    }

    /**
     * @return string
     */
    public function getStreetAddress(): string
    {
        return $this->streetAddress;
    }

    /**
     * @param string $streetAddress
     */
    public function setStreetAddress(string $streetAddress)
    {
        $this->streetAddress = $streetAddress;
    }

    /**
     * @return string
     */
    public function getPostalCode(): string
    {
        return $this->postalCode;
    }

    /**
     * @param string $postalCode
     */
    public function setPostalCode(string $postalCode)
    {
        $this->postalCode = $postalCode;
    }

    /**
     * @return string
     */
    public function getAddressLocality(): string
    {
        return $this->addressLocality;
    }

    /**
     * @param string $addressLocality
     */
    public function setAddressLocality(string $addressLocality)
    {
        $this->addressLocality = $addressLocality;
    }

    /**
     * @return string
     */
    public function getAddressCountry(): string
    {
        return $this->addressCountry;
    }

    /**
     * @param string $addressCountry
     */
    public function setAddressCountry(string $addressCountry)
    {
        $this->addressCountry = $addressCountry;
    }

    public function __toString()
    {
        return $this->streetAddress . $this->postalCode . $this->addressLocality . $this->addressCountry;
    }
}