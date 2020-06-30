<?php

namespace EventServiceLib\Message\Tasks;

use EventServiceLib\Message\AbstractMessage;

final class NewGuideCreatedMessage extends AbstractMessage
{
    const EVENT_IDENTITY = 'newGuideCreated';

    private $adsSystem;
    private $userId;

    /**
     * @return bool
     */
    public function isValid()
    {
        return !$this->hasEmpty(
            [
                $this->userId,
                $this->adsSystem
            ]
        );
    }

    /**
     * @return string
     */
    public function getAdsSystem()
    {
        return $this->adsSystem;
    }

    /**
     * @param string $adsSystem
     * @return NewGuideCreatedMessage
     */
    public function setAdsSystem($adsSystem)
    {
        $this->adsSystem = $adsSystem;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     * @return NewGuideCreatedMessage
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }
}
