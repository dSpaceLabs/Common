<?php
/**
 */

namespace Dspacelabs\Common\Doctrine\ORM\Traits;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trait to use a GUID like string as the primary key
 *
 * Usage:
 *
 * ```php
 * // ...
 * class User
 * {
 *     use \Dspacelabs\Common\Doctrine\ORM\Traits\GuidTrait;
 *     // ...
 * }
 * ```
 *
 * NOTE: You will still need to use a GUID generator to generator the GUID strings
 */
trait GuidTrait
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string", length=36)
     * @ORM\GeneratedValue(strategy="NONE")
     */
    protected $guid;

    /**
     * @return string
     */
    public function getGuid()
    {
        return $this->guid;
    }
}
