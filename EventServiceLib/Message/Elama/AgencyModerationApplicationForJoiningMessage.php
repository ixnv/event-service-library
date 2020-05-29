<?php

namespace EventServiceLib\Message\Elama;

use EventServiceLib\Message\AbstractMessage;

/** после проверки заботой заявки на присоединение к пп */
final class AgencyModerationApplicationForJoiningMessage extends AbstractMessage
{
    const EVENT_IDENTITY = 'agencyModerationApplicationForJoining';

    const STATUS_APPROVED = 'approved';
    const STATUS_REJECTED = 'rejected';

    const LEGAL_TYPE_PERSON = 'private_person';
    const LEGAL_TYPE_ENTITY = 'legal_entity';

    private $elamaId;
    private $agencyId;
    private $status;
    private $legalType;
    private $bankAccountRequisites;
    private $withdrawalMethod; # Withdrawal method text identity

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
                    $this->legalType,
                    $this->withdrawalMethod
                ]
            ) && in_array(
                $this->status,
                [self::STATUS_APPROVED, self::STATUS_REJECTED]
            ) && in_array(
                $this->legalType,
                [self::LEGAL_TYPE_ENTITY, self::LEGAL_TYPE_PERSON]
            );
    }

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
     * @return string
     */
    public function getLegalType()
    {
        return $this->legalType;
    }

    /**
     * @param string $legalType
     * @return AgencyModerationApplicationForJoiningMessage
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
     * @return AgencyModerationApplicationForJoiningMessage
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
     * @return AgencyModerationApplicationForJoiningMessage
     */
    public function setWithdrawalMethod($withdrawalMethod)
    {
        $this->withdrawalMethod = $withdrawalMethod;
        return $this;
    }
}
