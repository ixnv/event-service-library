<?php declare(strict_types=1);

namespace EventServiceLib\Message\Elama;

use EventServiceLib\EventServiceValues;
use EventServiceLib\Message\AbstractMessage;
use EventServiceLib\Message\ProjectSpecificMessageInterface;

class AgencyClientMoneyTransferMessage extends AbstractMessage implements ProjectSpecificMessageInterface
{

    protected $elamaId;
    protected $agencyId;
    protected $legalType;
    protected $transferDate;

    /**
     * @return mixed
     */
    public function getElamaId()
    {
        return $this->elamaId;
    }

    /**
     * @param mixed $elamaId
     */
    public function setElamaId($elamaId): void
    {
        $this->elamaId = $elamaId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAgencyId()
    {
        return $this->agencyId;
    }

    /**
     * @param mixed $agencyId
     */
    public function setAgencyId($agencyId): void
    {
        $this->agencyId = $agencyId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLegalType()
    {
        return $this->legalType;
    }

    /**
     * @param mixed $legalType
     */
    public function setLegalType($legalType): void
    {
        $this->legalType = $legalType;
        return $this;
    }

    /**
     * @return string
     */
    public function getTransferDate()
    {
        return $this->transferDate;
    }

    /**
     * @param string $transferDate - date string in "Y-m-d" format
     * @return AgencyСlientMoneyTransferMessage
     */
    public function setTransferDate($transferDate)
    {
        $this->transferDate = $transferDate;
        return $this;
    }

    /**
     * @return bool
     */
    public function isValid()
    {
        return !$this->hasEmpty([
                $this->elamaId,
                $this->agencyId,
                $this->legalType,
                $this->transferDate,
            ]) && in_array($this->legalType, [EventServiceValues::LEGAL_TYPE_ENTITY, EventServiceValues::LEGAL_TYPE_PERSON]);
    }

    /**
     * @return string
     */
    function getEventIdentity()
    {
        return 'agencyClientMoneyTransfer';
    }

    /**
     * @return string
     */
    public function getProjectIdentity()
    {
        return 'Elama';
    }

    /**
     * @return string
     */
    public function getProjectPossession()
    {
        return 'Elama';
    }

}