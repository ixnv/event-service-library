<?php

namespace EventServiceLib\Message\Utm;

use EventServiceLib\Message\AbstractMessage;

class UtmH2SMessage extends AbstractMessage
{
    /** @var int */
    protected $briefH2SId;

    /** @var string */
    protected $briefH2SSource;

    /**
     * @return int
     */
    public function getBriefH2SId()
    {
        return $this->briefH2SId;
    }

    /**
     * @param int $elamaId
     *
     * @return UtmH2SMessage
     */
    public function setBriefH2SId($elamaId)
    {
        $this->briefH2SId = $elamaId;

        return $this;
    }

    /**
     * @return string
     */
    public function getBriefH2SSource()
    {
        return $this->briefH2SSource;
    }

    /**
     * @param string $briefH2SSource
     *
     * @return UtmH2SMessage
     */
    public function setBriefH2SSource($briefH2SSource)
    {
        $this->briefH2SSource = $briefH2SSource;

        return $this;
    }

    public function isValid()
    {
        return !$this->hasEmpty([$this->briefH2SId, $this->briefH2SSource]);
    }

    public function getEventIdentity()
    {
        return 'utmH2S';
    }

}