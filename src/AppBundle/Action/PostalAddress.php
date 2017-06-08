<?php
/**
 * Created by PhpStorm.
 * User: Julien
 * Date: 12/05/2017
 * Time: 13:38
 */

namespace AppBundle\Action;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Routing\Annotation\Route;
use Domain\PostalAddress\Action\PostalAddressCreateAction;

class PostalAddress
{
    /**
     * @Route(
     *     name="postalAddress_create",
     *     path="/postal_addresses",
     *     defaults={"_api_resource_class"=PostalAddressCreateAction::class, "_api_item_operation_name"="post"}
     * )
     * @Method("POST")
     */
    public function __invoke($data)
    {
        return $data;
    }
}