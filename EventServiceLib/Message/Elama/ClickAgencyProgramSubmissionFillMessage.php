<?php

namespace EventServiceLib\Message\Elama;

use EventServiceLib\Message\AbstractMessage;

/** при клике на кнопку "Заполнить заявку" для участия в партнерской программе */
class ClickAgencyProgramSubmissionFillMessage extends AbstractMessage
{
    const EVENT_IDENTITY = 'clickAgencyProgramSubmissionFill';

    protected $elamaId;

    /**
     * @return int
     */
    public function getElamaId()
    {
        return $this->elamaId;
    }

    /**
     * @param int $elamaId
     * @return ClickAgencyProgramSubmissionFillMessage
     */
    public function setElamaId($elamaId)
    {
        $this->elamaId = $elamaId;

        return $this;
    }


    /**
     * @return bool
     */
    public function isValid()
    {
        return !$this->hasEmpty(
            [
                $this->elamaId
            ]
        );
    }

    /**
     * @return string
     */
    function getEventIdentity()
    {
        return self::EVENT_IDENTITY;
    }
}
