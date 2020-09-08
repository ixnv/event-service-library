<?php

namespace EventServiceLib\Message\Elama;

use EventServiceLib\Message\AbstractMessage;

/** Заявка на присоединение к пп */
final class AgencyApplicationForJoiningMessage extends AbstractMessage
{
    const EVENT_IDENTITY = 'agencyApplicationForJoining';

    private $elamaId;
    private $agencyId;
    private $customerSpending;
    private $customerCount;
    private $customerReplenishmentMethod;

    /**
     * @return bool
     */
    public function isValid()
    {
        return !$this->hasEmpty(
            [
                $this->elamaId,
                $this->agencyId,
                $this->customerCount,
                $this->customerSpending
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
     * @return AgencyApplicationForJoiningMessage
     */
    public function setElamaId($elamaId)
    {
        $this->elamaId = $elamaId;
        return $this;
    }

    /**
     * @return int
     */
    public function getAgencyId()
    {
        return $this->agencyId;
    }

    /**
     * @param int $agencyId
     * @return AgencyApplicationForJoiningMessage
     */
    public function setAgencyId($agencyId)
    {
        $this->agencyId = $agencyId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerSpending()
    {
        return $this->customerSpending;
    }

    /**
     * @param string $customerSpending
     * @return AgencyApplicationForJoiningMessage
     */
    public function setCustomerSpending($customerSpending)
    {
        $this->customerSpending = $customerSpending;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerCount()
    {
        return $this->customerCount;
    }

    /**
     * @param string $customerCount
     * @return AgencyApplicationForJoiningMessage
     */
    public function setCustomerCount($customerCount)
    {
        $this->customerCount = $customerCount;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerReplenishmentMethod()
    {
        return $this->customerReplenishmentMethod;
    }

    /**
     * @param string $customerReplenishmentMethod
     * @return AgencyApplicationForJoiningMessage
     */
    public function setCustomerReplenishmentMethod($customerReplenishmentMethod)
    {
        $this->customerReplenishmentMethod = $customerReplenishmentMethod;
        return $this;
    }
}
