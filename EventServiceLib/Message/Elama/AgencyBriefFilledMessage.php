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
    protected $briefAsText;
    protected $withdrawalMethod; # Withdrawal method text identity

    /**
     * @return integer
     */
    public function getElamaId()
    {
        return $this->elamaId;
    }

    /**
     * @return integer
     */
    public function getAgencyId()
    {
        return $this->agencyId;
    }

    /**
     * @return string
     */
    public function getLegalType()
    {
        return $this->legalType;
    }

    /**
     * @return string
     */
    public function getBriefAsText()
    {
        return $this->briefAsText;
    }

    /**
     * @return string
     */
    public function getWithdrawalMethod()
    {
        return $this->withdrawalMethod;
    }

    public function isValid()
    {
        return !$this->hasEmpty([
                $this->elamaId,
                $this->agencyId,
                $this->legalType,
                $this->briefAsText,
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