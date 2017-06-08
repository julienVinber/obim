<?php
/**
 * Created by PhpStorm.
 * User: Julien
 * Date: 29/04/2017
 * Time: 17:42
 */

namespace JulienVinber\Domain;


abstract class AbstractEntity
{
    /**
     * @return string
     */
    public function getEntityName(): string
    {
        return self::class;
    }
}