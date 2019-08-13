<?php

namespace EventServiceLib\Message\Utm;

use EventServiceLib\Message\AbstractMessage;

class WorksectionCreateH2SFinishedMessage extends AbstractMessage
{

    protected $elamaId;
    protected $tag;
    protected $campaignType;

    /**
     * @return string
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * @param string $tag
     * @return WorksectionCreateH2SFinishedMessage
     */
    public function setTag($tag)
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * @return string
     */
    public function getCampaignType()
    {
        return $this->campaignType;
    }

    /**
     * @param string $campaignType
     * @return WorksectionCreateH2SFinishedMessage
     */
    public function setCampaignType($campaignType)
    {
        $this->campaignType = $campaignType;

        return $this;
    }

    /**
     * @return int
     */
    public function getElamaId()
    {
        return $this->elamaId;
    }

    /**
     * @param int $elamaId
     *
     * @return $this
     */
    public function setElamaId($elamaId)
    {
        $this->elamaId = $elamaId;

        return $this;
    }

    /**
     * @return bool
     */
    public function isValid()
    {
        return !$this->hasEmpty([$this->elamaId, $this->tag, $this->campaignType]);
    }

    /**
     * @return string
     */
    function getEventIdentity()
    {
        return 'worksectionCreateH2SFinished';
    }

}