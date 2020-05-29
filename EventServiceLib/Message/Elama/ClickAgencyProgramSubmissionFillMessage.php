<?php

namespace EventServiceLib\Message\Elama;

use EventServiceLib\Message\AbstractMessage;

/** при клике на кнопку "Заполнить заявку" для участия в партнерской программе */
final class ClickAgencyProgramSubmissionFillMessage extends AbstractMessage
{
    const EVENT_IDENTITY = 'clickAgencyProgramSubmissionFill';

    private $elamaId;

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
}
