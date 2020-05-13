<?php

namespace EventServiceLib\Message;

class SurveyAfterRegistrationMessage extends AbstractMessage
{
    protected $elamaId;
    protected $email;
    protected $registrationReason; // причина регистрации
    protected $budget; // бюджет
    protected $linkToSite; // ссылка на сайт
    protected $agencySiteUrl; // сайт агентства
    protected $numberOfClients; // количество клиентов
    protected $learningGoal; // цель обучения

    /**
     * @return int
     */
    public function getElamaId()
    {
        return $this->elamaId;
    }

    /**
     * @param int $elamaId
     * @return SurveyAfterRegistrationMessage
     */
    public function setElamaId($elamaId)
    {
        $this->elamaId = $elamaId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return SurveyAfterRegistrationMessage
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRegistrationReason()
    {
        return $this->registrationReason;
    }

    /**
     * @param string $registrationReason
     * @return SurveyAfterRegistrationMessage
     */
    public function setRegistrationReason($registrationReason)
    {
        $this->registrationReason = $registrationReason;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBudget()
    {
        return $this->budget;
    }

    /**
     * @param string $budget
     * @return SurveyAfterRegistrationMessage
     */
    public function setBudget($budget)
    {
        $this->budget = $budget;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLinkToSite()
    {
        return $this->linkToSite;
    }

    /**
     * @param string $linkToSite
     * @return SurveyAfterRegistrationMessage
     */
    public function setLinkToSite($linkToSite)
    {
        $this->linkToSite = $linkToSite;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAgencySiteUrl()
    {
        return $this->agencySiteUrl;
    }

    /**
     * @param string $agencySiteUrl
     * @return SurveyAfterRegistrationMessage
     */
    public function setAgencySiteUrl($agencySiteUrl)
    {
        $this->agencySiteUrl = $agencySiteUrl;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumberOfClients()
    {
        return $this->numberOfClients;
    }

    /**
     * @param string $numberOfClients
     * @return SurveyAfterRegistrationMessage
     */
    public function setNumberOfClients($numberOfClients)
    {
        $this->numberOfClients = $numberOfClients;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLearningGoal()
    {
        return $this->learningGoal;
    }

    /**
     * @param string $learningGoal
     * @return SurveyAfterRegistrationMessage
     */
    public function setLearningGoal($learningGoal)
    {
        $this->learningGoal = $learningGoal;
        return $this;
    }


    /**
     * @return bool
     */
    public function isValid()
    {
        return !$this->hasEmpty(
            [
                $this->elamaId
            ]
        );
    }

    /**
     * @return string
     */
    public function getEventIdentity()
    {
        return 'surveysAfterRegistration';
    }

}