<?php

namespace EventServiceLib\Message;

class SetUtmBriefIoMessage extends AbstractMessage
{
    /** @var string */
    protected $brifIoId;

    /** @var string */
    protected $briefIoSource;

    /**
     * @return string
     */
    public function getBrifIoId()
    {
        return $this->brifIoId;
    }

    /**
     * @param string $brifIoId
     * @return SetUtmBriefIoMessage
     */
    public function setBrifIoId($brifIoId)
    {
        $this->brifIoId = $brifIoId;

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
     * @return SetUtmBriefIoMessage
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
        return 'setBriefIoSource';
    }

}