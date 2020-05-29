<?php

namespace EventServiceLib\Message\Utm;

use EventServiceLib\Message\AbstractMessage;

final class UtmBriefIoMessage extends AbstractMessage
{
    const EVENT_IDENTITY = 'utmBriefIo';

    private $briefIoId;
    private $briefIoSource;

    /**
     * @return bool
     */
    public function isValid()
    {
        return !$this->hasEmpty([$this->briefIoId, $this->briefIoSource]);
    }

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
}
