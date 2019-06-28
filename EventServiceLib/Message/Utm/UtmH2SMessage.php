<?php

namespace EventServiceLib\Message\Utm;

use EventServiceLib\Message\AbstractMessage;

class UtmH2SMessage extends AbstractMessage
{
    /** @var int */
    protected $briefIoId;

    /** @var string */
    protected $briefIoSource;

    /**
     * @return int
     */
    public function getBriefIoId()
    {
        return $this->briefIoId;
    }

    /**
     * @param int $elamaId
     *
     * @return UtmH2SMessage
     */
    public function setBriefIoId($elamaId)
    {
        $this->briefIoId = $elamaId;

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
     * @return UtmH2SMessage
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
        return 'utmH2S';
    }

}