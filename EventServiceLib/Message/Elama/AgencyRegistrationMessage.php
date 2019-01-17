<?php declare(strict_types=1);

namespace EventServiceLib\Message\Elama;

use EventServiceLib\Message\AbstractMessage;

class AgencyRegistrationMessage extends AbstractMessage
{

    protected $elamaId;
    protected $agencyId;
    protected $legalType;
    protected $agencyRegistrationDate;

    public function getElamaId()
    {
        return $this->elamaId;
    }

    public function setElamaId($elamaId)
    {
        $this->elamaId = $elamaId;
        return $this;
    }

    public function getAgencyId()
    {
        return $this->agencyId;
    }

    public function setAgencyId($agencyId)
    {
        $this->agencyId = $agencyId;
        return $this;
    }

    public function getLegalType()
    {
        return $this->legalType;
    }

    public function setLegalType($legalType)
    {
        $this->legalType = $legalType;
        return $this;
    }

    public function getAgencyRegistrationDate()
    {
        return $this->agencyRegistrationDate;
    }

    public function setAgencyRegistrationDate($agencyRegistrationDate)
    {
        $this->agencyRegistrationDate = $agencyRegistrationDate;
        return $this;
    }

    public function isValid()
    {
        return !$this->hasEmpty([
            $this->elamaId,
            $this->agencyId,
            $this->legalType,
            $this->agencyRegistrationDate,
        ]);
    }

    function getEventIdentity()
    {
        return 'AgencyRegistration';
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