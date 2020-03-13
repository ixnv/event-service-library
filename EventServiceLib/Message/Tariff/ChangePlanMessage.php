<?php

namespace EventServiceLib\Message\Tariff;

use EventServiceLib\Message\AbstractMessage;

class ChangePlanMessage extends AbstractMessage
{
    protected $elamaId;
    protected $reason;
    protected $plan;

    /**
     * @return int
     */
    public function getElamaId()
    {
        return $this->elamaId;
    }

    /**
     * @param int $elamaId
     * @return ChangePlanMessage
     */
    public function setElamaId($elamaId)
    {
        $this->elamaId = $elamaId;

        return $this;
    }

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     * @return ChangePlanMessage
     */
    public function setReason($reason)
    {
        $this->reason = $reason;

        return $this;
    }

    /**
     * @return string
     */
    public function getPlan()
    {
        return $this->plan;
    }

    /**
     * @param string $plan
     * @return ChangePlanMessage
     */
    public function setPlan($plan)
    {
        $this->plan = $plan;

        return $this;
    }

    /**
     * @return bool
     */
    public function isValid()
    {
        return !$this->hasEmpty([
            $this->elamaId,
            $this->reason,
            $this->plan,
        ]);
    }

    /**
     * @return string
     */
    public function getEventIdentity()
    {
        return 'changePlan';
    }

}