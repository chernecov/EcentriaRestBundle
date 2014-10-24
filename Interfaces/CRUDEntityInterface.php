<?php
/*
 * This file is part of the Ecentria software.
 *
 * (c) 2014, OpticsPlanet, Inc
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ecentria\Libraries\CoreRestBundle\Interfaces;

/**
 * CRUD entity interface
 *
 * @author Sergey Chernecov <sergey.chernecov@intexsys.lv>
 */
interface CRUDEntityInterface extends EmbeddedInterface, TransactionalInterface, TimestampableInterface
{
    /**
     * Id getter
     *
     * @return mixed
     */
    public function getId();

    /**
     * Id setter
     *
     * @param mixed $id
     *
     * @return self
     */
    public function setId($id);
}
