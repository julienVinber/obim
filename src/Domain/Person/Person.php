<?php
/**
 * Created by PhpStorm.
 * User: Julien
 * Date: 02/05/2017
 * Time: 20:17
 */

namespace Domain\Person;


use Domain\PostalAddress\PostalAddress;
use JulienVinber\Domain\Type\StringId;

class Person
{
    /**
     * Identifiant
     * @var StringId $id
     */
    private $id;

    /**
     * Adresse
     * @var PostalAddress $address
     */
    private $address;

    /**
     * Identifiant
     * @var StringId $birthDate
     */
    private $birthDate;

    /**
     * Identifiant
     * @var StringId $email
     */
    private $email;

    /**
     * Identifiant
     * @var StringId $familyName
     */
    private $familyName;

    /**
     * Identifiant
     * @var StringId $gender
     */
    private $gender;

    /**
     * Identifiant
     * @var StringId $givenName
     */
    private $givenName;
}