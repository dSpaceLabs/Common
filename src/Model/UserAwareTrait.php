<?php
/**
 */

namespace Dspacelabs\Common\Model;

/**
 */
trait UserAwareTrait
{
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }
}
