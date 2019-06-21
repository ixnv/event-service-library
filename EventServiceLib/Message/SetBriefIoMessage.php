<?php

namespace EventServiceLib\Message;

class SetBriefIoMessage extends AbstractMessage
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
     * @return SetBriefIoMessage
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
     * @return SetBriefIoMessage
     */
    public function setBriefIoSource($briefIoSource)
    {
        $this->briefIoSource = $briefIoSource;
        return $this;
    }

    public function isValid()
    {
        return !$this->hasEmpty([
            $this->brifIoId,
        ]);
    }

    public function getEventIdentity()
    {
        return 'setBriefIoSource';
    }
}