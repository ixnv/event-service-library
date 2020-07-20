<?php

namespace EventServiceLib\Message\Tariff;

use EventServiceLib\Message\AbstractMessage;

final class ChangePlanMessage extends AbstractMessage
{
    const EVENT_IDENTITY = 'changePlan';

    private $elamaId;
    private $reason;
    private $plan;
    private $planFinishDate;
    private $subscribeStatus;
    private $planCost;
    private $currency;
    private $prevPlan;
    private $prevPlanReason;

    /**
     * @return bool
     */
    public function isValid()
    {
        return !$this->hasEmpty(
            [
                $this->elamaId,
                $this->reason,
                $this->plan,
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
     * @return string
     */
    public function getPlanFinishDate()
    {
        return $this->planFinishDate;
    }

    /**
     * @param string $planFinishDate
     * @return ChangePlanMessage
     */
    public function setPlanFinishDate($planFinishDate)
    {
        $this->planFinishDate = $planFinishDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSubscribeStatus()
    {
        return $this->subscribeStatus;
    }

    /**
     * @param string $subscribeStatus
     * @return ChangePlanMessage
     */
    public function setSubscribeStatus($subscribeStatus)
    {
        $this->subscribeStatus = $subscribeStatus;
        return $this;
    }

    /**
     * @return float
     */
    public function getPlanCost()
    {
        return $this->planCost;
    }

    /**
     * @param float $planCost
     * @return ChangePlanMessage
     */
    public function setPlanCost($planCost)
    {
        $this->planCost = $planCost;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     * @return ChangePlanMessage
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return string
     */
    public function getPrevPlan()
    {
        return $this->prevPlan;
    }

    /**
     * @param string $prevPlan
     * @return ChangePlanMessage
     */
    public function setPrevPlan($prevPlan)
    {
        $this->prevPlan = $prevPlan;
        return $this;
    }

    /**
     * @return string
     */
    public function getPrevPlanReason()
    {
        return $this->prevPlanReason;
    }

    /**
     * @param string $prevPlanReason
     * @return ChangePlanMessage
     */
    public function setPrevPlanReason($prevPlanReason)
    {
        $this->prevPlanReason = $prevPlanReason;
        return $this;
    }
}