<?php


namespace EventServiceLib\Message;


class SetAdvertisingCampaignMessage
{
    /** @var string */
    protected $advCampaignId;

    /** @var string */
    protected $advCampaignSource;

    /**
     * @return string
     */
    public function getAdvCampaignId()
    {
        return $this->advCampaignId;
    }

    /**
     * @param string $advCampaignId
     * @return SetAdvertisingCampaignMessage
     */
    public function setAdvCampaignId($advCampaignId)
    {
        $this->advCampaignId = $advCampaignId;

        return $this;
    }

    /**
     * @return string
     */
    public function getAdvCampaignSource()
    {
        return $this->advCampaignSource;
    }

    /**
     * @param string $advCampaignSource
     * @return SetAdvertisingCampaignMessage
     */
    public function setAdvCampaignSource($advCampaignSource)
    {
        $this->advCampaignSource = $advCampaignSource;
        return $this;
    }

    public function isValid()
    {
        return !$this->hasEmpty([
            $this->advCampaignId,
        ]);
    }

    public function getEventIdentity()
    {
        return 'setAdvCampaignSource';
    }
}