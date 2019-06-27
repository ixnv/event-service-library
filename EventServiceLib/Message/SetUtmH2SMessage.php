<?php

namespace EventServiceLib\Message;


class SetUtmH2SMessage extends AbstractMessage
{
    /** @var string */
    protected $elamaId;

    /** @var string */
    protected $briefIoSource;

    /**
     * @return string
     */
    public function getElamaId()
    {
        return $this->elamaId;
    }

    /**
     * @param string $elamaId
     *
     * @return SetUtmH2SMessage
     */
    public function setElamaId($elamaId)
    {
        $this->elamaId = $elamaId;

        return $this;
    }

    /**
     * @return string
     */
    public function getBriefIoSource()
    {
        return $this->briefIoSource;
    }

    /**
     * @param string $briefIoSource
     *
     * @return SetUtmH2SMessage
     */
    public function setBriefIoSource($briefIoSource)
    {
        $this->briefIoSource = $briefIoSource;

        return $this;
    }

    public function isValid()
    {
        return !empty($this->brifIoId);
    }

    public function getEventIdentity()
    {
        return 'setH2SSource';
    }

}