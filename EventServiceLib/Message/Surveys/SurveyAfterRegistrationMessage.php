<?php

namespace EventServiceLib\Message\Surveys;

use EventServiceLib\Message\AbstractMessage;

final class SurveyAfterRegistrationMessage extends AbstractMessage
{
    const EVENT_IDENTITY = 'surveysAfterRegistration';

    private $elamaId;
    private $email;
    private $registrationReason; // причина регистрации
    private $budget; // бюджет
    private $whatItAdvertises; // что рекламирует
    private $participationInPartnerProgram; // участие в партнерской программе
    private $agencySiteUrl; // сайт агентства
    private $numberOfClients; // количество клиентов
    private $learningGoal; // цель обучения
    private $industryId; // Индустрия

    // int, bra
    private $describeYou; // Which of the below options best describes you
    private $companyHas; // The company that I work for has
    private $directYourTrafficTo; // If not, where you direct your traffic to?
    private $geographicalLocation; // What geographical locations do you target?
    private $mainCompetitors; // Who do you consider your main competitors (max 3)?
    private $averageMonthlyBudgetPerClient; // What is the average monthly paid advertising budget per client?
    private $platformsToAdvertise; // What are your preferred platforms to advertise on?
    private $setOfResources; // We also provide an excellent set of resources to help you learn more about the practice of Internet Advertising, including...
    private $improveWorkWithPaidAdvertising; // Tell us how we can best help you to improve your experience and work with paid ads?

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
    public function getWhatItAdvertises()
    {
        return $this->whatItAdvertises;
    }

    /**
     * @param string $whatItAdvertises
     * @return SurveyAfterRegistrationMessage
     */
    public function setWhatItAdvertises($whatItAdvertises)
    {
        $this->whatItAdvertises = $whatItAdvertises;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getParticipationInPartnerProgram()
    {
        return $this->participationInPartnerProgram;
    }

    /**
     * @param string $participationInPartnerProgram
     * @return SurveyAfterRegistrationMessage
     */
    public function setParticipationInPartnerProgram($participationInPartnerProgram)
    {
        $this->participationInPartnerProgram = $participationInPartnerProgram;
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
     * @return int
     */
    public function getIndustryId()
    {
        return $this->industryId;
    }

    /**
     * @param int $industryId
     * @return SurveyAfterRegistrationMessage
     */
    public function setIndustryId($industryId)
    {
        $this->industryId = $industryId;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescribeYou()
    {
        return $this->describeYou;
    }

    /**
     * @param string $describeYou
     * @return SurveyAfterRegistrationMessage
     */
    public function setDescribeYou($describeYou)
    {
        $this->describeYou = $describeYou;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyHas()
    {
        return $this->companyHas;
    }

    /**
     * @param string $companyHas
     * @return SurveyAfterRegistrationMessage
     */
    public function setCompanyHas($companyHas)
    {
        $this->companyHas = $companyHas;
        return $this;
    }

    /**
     * @return string
     */
    public function getDirectYourTrafficTo()
    {
        return $this->directYourTrafficTo;
    }

    /**
     * @param string $directYourTrafficTo
     * @return SurveyAfterRegistrationMessage
     */
    public function setDirectYourTrafficTo($directYourTrafficTo)
    {
        $this->directYourTrafficTo = $directYourTrafficTo;
        return $this;
    }

    /**
     * @return string
     */
    public function getGeographicalLocation()
    {
        return $this->geographicalLocation;
    }

    /**
     * @param string $geographicalLocation
     * @return SurveyAfterRegistrationMessage
     */
    public function setGeographicalLocation($geographicalLocation)
    {
        $this->geographicalLocation = $geographicalLocation;
        return $this;
    }

    /**
     * @return string
     */
    public function getMainCompetitors()
    {
        return $this->mainCompetitors;
    }

    /**
     * @param string $mainCompetitors
     * @return SurveyAfterRegistrationMessage
     */
    public function setMainCompetitors($mainCompetitors)
    {
        $this->mainCompetitors = $mainCompetitors;
        return $this;
    }

    /**
     * @return string
     */
    public function getAverageMonthlyBudgetPerClient()
    {
        return $this->averageMonthlyBudgetPerClient;
    }

    /**
     * @param string $averageMonthlyBudgetPerClient
     * @return SurveyAfterRegistrationMessage
     */
    public function setAverageMonthlyBudgetPerClient($averageMonthlyBudgetPerClient)
    {
        $this->averageMonthlyBudgetPerClient = $averageMonthlyBudgetPerClient;
        return $this;
    }

    /**
     * @return string
     */
    public function getPlatformsToAdvertise()
    {
        return $this->platformsToAdvertise;
    }

    /**
     * @param string $platformsToAdvertise
     * @return SurveyAfterRegistrationMessage
     */
    public function setPlatformsToAdvertise($platformsToAdvertise)
    {
        $this->platformsToAdvertise = $platformsToAdvertise;
        return $this;
    }

    /**
     * @return string
     */
    public function getSetOfResources()
    {
        return $this->setOfResources;
    }

    /**
     * @param string $setOfResources
     * @return SurveyAfterRegistrationMessage
     */
    public function setSetOfResources($setOfResources)
    {
        $this->setOfResources = $setOfResources;
        return $this;
    }

    /**
     * @return string
     */
    public function getImproveWorkWithPaidAdvertising()
    {
        return $this->improveWorkWithPaidAdvertising;
    }

    /**
     * @param string $improveWorkWithPaidAdvertising
     * @return SurveyAfterRegistrationMessage
     */
    public function setImproveWorkWithPaidAdvertising($improveWorkWithPaidAdvertising)
    {
        $this->improveWorkWithPaidAdvertising = $improveWorkWithPaidAdvertising;
        return $this;
    }
}
