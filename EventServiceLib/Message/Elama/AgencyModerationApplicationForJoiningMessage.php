<?php

namespace EventServiceLib\Message\Elama;

use EventServiceLib\Message\AbstractMessage;

/** после проверки заботой заявки на присоединение к пп */
class AgencyModerationApplicationForJoiningMessage extends AbstractMessage
{
    const STATUS_APPROVED = 'approved';
    const STATUS_REJECTED = 'rejected';

    protected $elamaId;
    protected $agencyId;
    protected $status;

    /**
     * @return integer
     */
    public function getElamaId()
    {
        return $this->elamaId;
    }

    /**
     * @param integer $elamaId
     * @return AgencyModerationApplicationForJoiningMessage
     */
    public function setElamaId($elamaId)
    {
        $this->elamaId = $elamaId;
        return $this;
    }

    /**
     * @return integer
     */
    public function getAgencyId()
    {
        return $this->agencyId;
    }

    /**
     * @param integer $agencyId
     * @return AgencyModerationApplicationForJoiningMessage
     */
    public function setAgencyId($agencyId)
    {
        $this->agencyId = $agencyId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     * @return AgencyModerationApplicationForJoiningMessage
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return bool
     */
    public function isValid()
    {
        return !$this->hasEmpty(
                [
                    $this->elamaId,
                    $this->agencyId,
                    $this->status,
                ]
            ) && in_array(
                $this->status,
                [self::STATUS_APPROVED, self::STATUS_REJECTED]
            );
    }

    /**
     * @return string
     */
    function getEventIdentity()
    {
        return 'agencyModerationApplicationForJoining';
    }
}
