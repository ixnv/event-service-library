<?php

namespace EventServiceLib\Message\Report;

use EventServiceLib\Message\AbstractMessage;

class LingvoActivateTrialMessage extends AbstractMessage
{

    protected $elamaId;
    protected $unit;
    protected $activateTrialDate; // Дата подключение триала
    protected $hasProject = false;
    protected $hasGeneration = false;

    /**
     * @return int
     */
    public function getElamaId()
    {
        return $this->elamaId;
    }

    /**
     * @param int $elamaId
     * @return LingvoActivateTrialMessage
     */
    public function setElamaId($elamaId)
    {
        $this->elamaId = $elamaId;

        return $this;
    }

    /**
     * @return string
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * @param string $unit
     * @return LingvoActivateTrialMessage
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getActivateTrialDate()
    {
        return $this->activateTrialDate;
    }

    /**
     * @param mixed $activateTrialDate
     * @return LingvoActivateTrialMessage
     */
    public function setActivateTrialDate($activateTrialDate)
    {
        $this->activateTrialDate = $activateTrialDate;

        return $this;
    }

    /**
     * @return bool
     */
    public function hasProject()
    {
        return $this->hasProject;
    }

    /**
     * @param bool $hasProject
     * @return LingvoActivateTrialMessage
     */
    public function setHasProject($hasProject)
    {
        $this->hasProject = $hasProject;

        return $this;
    }

    /**
     * @return bool
     */
    public function hasGeneration()
    {
        return $this->hasGeneration;
    }

    /**
     * @param bool $hasGeneration
     * @return LingvoActivateTrialMessage
     */
    public function setHasGeneration($hasGeneration)
    {
        $this->hasGeneration = $hasGeneration;

        return $this;
    }

    /**
     * @return string
     */
    function getEventIdentity()
    {
        return 'lingvoActivateTrialTrial';
    }

    /**
     * @return bool
     */
    public function isValid()
    {
        return !$this->hasEmpty([
            $this->elamaId,
        ]);
    }

}