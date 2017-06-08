<?php
/**
 * Created by PhpStorm.
 * User: Julien
 * Date: 29/04/2017
 * Time: 16:44
 */

namespace Domain\PostalAddress;

use JulienVinber\Domain\AbstractEntity;
use JulienVinber\Domain\Type\StringId;

/**
 * Adresse postale
 * @see http://schema.org/PostalAddress
 */
class PostalAddress extends AbstractEntity
{
    /**
     * Identifiant
     * @var StringId $id
     */
    private $id;

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
     * @param string $streetAddress
     * @param string $postalCode
     * @param string $addressLocality
     * @param string $addressCountry
     */
    public function __construct(StringId $id, string $streetAddress, string $postalCode, string $addressLocality, string $addressCountry)
    {
        $this->id = $id;
        $this->streetAddress = $streetAddress;
        $this->postalCode = $postalCode;
        $this->addressLocality = $addressLocality;
        $this->addressCountry = $addressCountry;
    }

    /**
     * @return StringId
     */
    public function getId(): StringId
    {
        return $this->id;
    }

    /**
     * @param StringId $id
     */
    public function setId(StringId $id)
    {
        $this->id = $id;
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