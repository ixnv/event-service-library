<?php

namespace EventServiceLib\Message\Utm;

use EventServiceLib\Message\AbstractMessage;

class UtmIoConsultationMessage extends AbstractMessage
{
    const EVENT_IDENTITY = 'utmIoConsultation';

    protected $source;
    protected $filledFormId;

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param $source
     * @return UtmIoConsultationMessage
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * @return int
     */
    public function getFilledFormId()
    {
        return $this->filledFormId;
    }

    /**
     * @param $filledFormId
     * @return UtmIoConsultationMessage
     */
    public function setFilledFormId($filledFormId)
    {
        $this->filledFormId = $filledFormId;

        return $this;
    }

    /**
     * @return bool
     */
    public function isValid()
    {
        return !$this->hasEmpty([$this->filledFormId, $this->source]);
    }

    public function getEventIdentity()
    {
        return self::EVENT_IDENTITY;
    }
}
