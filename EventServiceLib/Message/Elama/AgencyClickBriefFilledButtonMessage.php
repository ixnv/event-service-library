<?php

namespace EventServiceLib\Message\Elama;

use EventServiceLib\Message\AbstractMessage;

/** при клике на кнопку "Заполнить заявку" для участия в партнерской программе */
class AgencyClickBriefFilledButtonMessage extends AbstractMessage
{
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
     * @return AgencyClickBriefFilledButtonMessage
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
        return 'agencyClickBriefFilledButton';
    }
}
