<?php
/**
 * Created by PhpStorm.
 * User: Julien
 * Date: 29/04/2017
 * Time: 17:38
 */

namespace JulienVinber\Domain;


abstract class AbstractAction
{
    /**
     * @return string
     */
    public function getActionName(): string
    {
        return self::class;
    }
}