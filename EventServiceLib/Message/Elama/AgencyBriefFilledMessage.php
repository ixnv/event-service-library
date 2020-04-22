<?php declare(strict_types=1);

namespace EventServiceLib\Message\Elama;

use EventServiceLib\EventServiceValues;
use EventServiceLib\Message\AbstractMessage;

/** при заполнение информации об агентстве */
class AgencyBriefFilledMessage extends AbstractMessage
{

    protected $elamaId;
    protected $agencyId;
    protected $legalType;
    protected $bankAccountRequisites;
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
    public function getBankAccountRequisites()
    {
        return $this->bankAccountRequisites;
    }

    /**
     * @param array $bankAccountRequisites
     * @return AgencyBriefFilledMessage
     */
    public function setBankAccountRequisites($bankAccountRequisites)
    {
        $this->bankAccountRequisites = $bankAccountRequisites;
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

    /**
     * @return bool
     */
    public function isValid()
    {
        return !$this->hasEmpty(
                [
                    $this->elamaId,
                    $this->agencyId,
                    $this->legalType,
                    $this->withdrawalMethod
                ]
            ) && in_array(
                $this->legalType,
                [EventServiceValues::LEGAL_TYPE_ENTITY, EventServiceValues::LEGAL_TYPE_PERSON]
            );
    }

    /**
     * @return string
     */
    function getEventIdentity()
    {
        return 'agencyBriefFilled';
    }
}
