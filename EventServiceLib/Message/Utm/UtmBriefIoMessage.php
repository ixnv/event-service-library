<?php

namespace EventServiceLib\Message\Utm;

use EventServiceLib\Message\AbstractMessage;

class UtmBriefIoMessage extends AbstractMessage
{
    const EVENT_IDENTITY = 'utmBriefIo';

    protected $briefIoId;
    protected $briefIoSource;

    /**
     * @return int
     */
    public function getBriefIoId()
    {
        return $this->briefIoId;
    }

    /**
     * @param int $briefIoId
     * @return UtmBriefIoMessage
     */
    public function setBriefIoId($briefIoId)
    {
        $this->briefIoId = $briefIoId;

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
     * @return UtmBriefIoMessage
     */
    public function setBriefIoSource($briefIoSource)
    {
        $this->briefIoSource = $briefIoSource;

        return $this;
    }

    public function isValid()
    {
        return !$this->hasEmpty([$this->briefIoId, $this->briefIoSource]);
    }

    public function getEventIdentity()
    {
        return 'utmBriefIo';
    }
}
