<?php
/**
 */

namespace Dspacelabs\Common\Model;

/**
 * Guid Aware Trait is used for models that contain a guid
 */
trait GuidAwareTrait
{
    /**
     * @return string
     */
    public function getGuid()
    {
        return $this->guid;
    }
}
