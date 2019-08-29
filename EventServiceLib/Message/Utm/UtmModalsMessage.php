<?php

namespace EventServiceLib\Message\Utm;

use EventServiceLib\Message\AbstractMessage;

class UtmModalsMessage extends AbstractMessage
{
    /** @var string */
    protected $modalSource;

    /** @var int */
    protected $filledFormId;

    /**
     * @return string
     */
    public function getModalSource()
    {
        return $this->modalSource;
    }

    /**
     * @param $modalSource
     *
     * @return $this
     */
    public function setModalSource($modalSource)
    {
        $this->modalSource = $modalSource;

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
     *
     * @return $this
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
        return !$this->hasEmpty([$this->filledFormId, $this->modalSource]);
    }

    public function getEventIdentity()
    {
        return 'InfositeModals';
    }

}