<?php

namespace EventServiceLib\Message\Lingvo;

use EventServiceLib\Message\AbstractMessage;

class LingvoActivateTrialMessage extends AbstractMessage
{
    const PRIORITY_HIGH = 'high';
    const PRIORITY_MEDIUM = 'medium';
    const PRIORITY_LOW = 'low';
    const PRIORITY_ZERO = 'zero';

    protected $elamaId;
    protected $unit; // ss\sa
    protected $activateTrialDate; // Дата подключение триала
    protected $hasProject = false;
    protected $hasGeneration = false;
    protected $priority;
    protected $comment; // будет создан как нотис к сделки

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
     * @return string
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * @param string $priority
     * @return LingvoActivateTrialMessage
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     * @return LingvoActivateTrialMessage
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
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