<?php declare(strict_types=1);

namespace EventServiceLib\Message\Elama;

use EventServiceLib\EventServiceValues;
use EventServiceLib\Message\AbstractMessage;
use EventServiceLib\Message\ProjectSpecificMessageInterface;

class AgencyBriefFilledMessage extends AbstractMessage implements ProjectSpecificMessageInterface
{

    protected $elamaId;
    protected $agencyId;
    protected $legalType;
    protected $briefData;
    protected $withdrawalMethod; # Withdrawal method text identity

    /**
     * @return integer
     */
    public function getElamaId()
    {
        return $this->elamaId;
    }

    /**
     * @param integer $elamaId
     * @return AgencyBriefFilledMessage
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
     * @return AgencyBriefFilledMessage
     */
    public function setAgencyId($agencyId)
    {
        $this->agencyId = $agencyId;
        return $this;
    }

    /**
     * @return string
     */
    public function getLegalType()
    {
        return $this->legalType;
    }

    /**
     * @param string $legalType
     * @return AgencyBriefFilledMessage
     */
    public function setLegalType($legalType)
    {
        $this->legalType = $legalType;
        return $this;
    }

    /**
     * @return array
     */
    public function getBriefData()
    {
        return $this->briefData;
    }

    /**
     * @param array $briefData
     * @return AgencyBriefFilledMessage
     */
    public function setBriefData($briefData)
    {
        $this->briefData = $briefData;
        return $this;
    }

    /**
     * @param array $briefDataRow
     * @return AgencyBriefFilledMessage
     */
    public function addBriefDataRow($briefDataRow)
    {
        $this->briefData[] = $briefDataRow;
        return $this;
    }

    /**
     * @return string
     */
    public function getWithdrawalMethod()
    {
        return $this->withdrawalMethod;
    }

    /**
     * @param string $withdrawalMethod
     * @return AgencyBriefFilledMessage
     */
    public function setWithdrawalMethod($withdrawalMethod)
    {
        $this->withdrawalMethod = $withdrawalMethod;
        return $this;
    }

    public function isValid()
    {
        return !$this->hasEmpty([
                $this->elamaId,
                $this->agencyId,
                $this->legalType,
                $this->withdrawalMethod
            ]) && in_array($this->legalType, [EventServiceValues::LEGAL_TYPE_ENTITY, EventServiceValues::LEGAL_TYPE_PERSON]);
    }

    function getEventIdentity()
    {
        return 'AgencyBriefFilled';
    }

    public function getProjectIdentity()
    {
        return 'Elama';
    }

    public function getProjectPossession()
    {
        return 'Elama';
    }

}