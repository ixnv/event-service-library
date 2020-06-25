<?php

namespace EventServiceLib\Message\CampaignCreator;

use EventServiceLib\Message\AbstractMessage;

final class NewCampaignMessage extends AbstractMessage
{
    const EVENT_IDENTITY = 'newCampaign';

    private $userId; // elama user id
    private $advSystem;
    private $accountId;
    private $campaignId;
    private $accountType;
    private $campaignDuration;

    public function isValid()
    {
        return !$this->hasEmpty(
            [
                $this->userId,
                $this->advSystem,
                $this->accountId,
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
     * @return NewCampaignMessage
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdvSystem()
    {
        return $this->advSystem;
    }

    /**
     * @param string $advSystem
     * @return NewCampaignMessage
     */
    public function setAdvSystem($advSystem)
    {
        $this->advSystem = $advSystem;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * @param string $accountId
     * @return NewCampaignMessage
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
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
     * @return NewCampaignMessage
     */
    public function setCampaignId($campaignId)
    {
        $this->campaignId = $campaignId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountType()
    {
        return $this->accountType;
    }

    /**
     * @param string $accountType
     * @return NewCampaignMessage
     */
    public function setAccountType($accountType)
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * @return string
     */
    public function getCampaignDuration()
    {
        return $this->campaignDuration;
    }

    /**
     * @param string $campaignDuration
     * @return NewCampaignMessage
     */
    public function setCampaignDuration($campaignDuration)
    {
        $this->campaignDuration = $campaignDuration;
        return $this;
    }
}
