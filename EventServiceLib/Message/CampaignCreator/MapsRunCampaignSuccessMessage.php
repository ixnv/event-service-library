<?php

namespace EventServiceLib\Message\CampaignCreator;

use EventServiceLib\Message\AbstractMessage;

final class MapsRunCampaignSuccessMessage extends AbstractMessage
{
    const EVENT_IDENTITY = 'MapsRunCampaignSuccess';

    private $userId; // elama user id
    private $duration;
    private $campaignId;

    public function isValid()
    {
        return !$this->hasEmpty(
            [
                $this->userId,
                $this->duration,
                $this->campaignId,
            ]
        );
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
     * @return MapsRunCampaignSuccessMessage
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return string
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param string $duration
     * @return MapsRunCampaignSuccessMessage
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * @return string
     */
    public function getCampaignId()
    {
        return $this->campaignId;
    }

    /**
     * @param string $campaignId
     * @return MapsRunCampaignSuccessMessage
     */
    public function setCampaignId($campaignId)
    {
        $this->campaignId = $campaignId;
        return $this;
    }
}
