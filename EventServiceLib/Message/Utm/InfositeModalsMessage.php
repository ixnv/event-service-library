<?php

namespace EventServiceLib\Message\Utm;

use EventServiceLib\Message\AbstractMessage;

class InfositeModalsMessage extends AbstractMessage
{
    /** @var int */
    protected $elamaId;

    /** @var string */
    protected $modalSource;

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
     * @return InfositeModalsMessage
     */
    public function setElamaId($elamaId)
    {
        $this->elamaId = $elamaId;

        return $this;
    }

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
     * @return bool
     */
    public function isValid()
    {
        return !$this->hasEmpty([$this->elamaId, $this->modalSource]);
    }

    public function getEventIdentity()
    {
        return 'InfositeModals';
    }

}