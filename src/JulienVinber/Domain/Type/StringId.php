<?php
/**
 * Created by PhpStorm.
 * User: Julien
 * Date: 29/04/2017
 * Time: 17:32
 */

namespace JulienVinber\Domain\Type;


class StringId implements IdTypeInterface
{

    /**
     * @var string $value
     */
    private $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }
    public function getValue()
    {
        return $this->value;
    }
}