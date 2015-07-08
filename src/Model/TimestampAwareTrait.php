<?php
/**
 */

namespace Dspacelabs\Common\Model;

/**
 */
trait TimestampAwareTrait
{
    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}
