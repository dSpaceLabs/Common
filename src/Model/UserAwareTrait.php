<?php
/**
 */

namespace Dspacelabs\Common\Model;

/**
 */
trait UserAwareTrait
{
    /**
     * @var UserInterface
     */
    protected $createdBy;

    /**
     * @var UserInterface
     */
    protected $updatedBy;

    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }
}
