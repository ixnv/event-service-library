<?php

namespace EventServiceLib\Message\User;

use EventServiceLib\Message\AbstractMessage;

/** Сообщение для синхронизации данных в амплитуде, отправляет user-info сервис */
final class UserInfoMessage extends AbstractMessage
{
    const EVENT_IDENTITY = 'userInfo';

    private $userId;
    private $lastDateLogin;
    private $country;
    private $locale;
    private $unit;
    private $agencyId;
    private $plan;
    private $planFinishDate;
    private $planReason;
    private $roles;

    /**
     * @return bool
     */
    public function isValid()
    {
        return !$this->hasEmpty(
            [
                $this->userId
            ]
        );
    }

    /**
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     * @return UserInfoMessage
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastDateLogin()
    {
        return $this->lastDateLogin;
    }

    /**
     * @param string $lastDateLogin
     * @return UserInfoMessage
     */
    public function setLastDateLogin($lastDateLogin)
    {
        $this->lastDateLogin = $lastDateLogin;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return UserInfoMessage
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @param string $locale
     * @return UserInfoMessage
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
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
     * @return UserInfoMessage
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;
        return $this;
    }

    /**
     * @return string
     */
    public function getAgencyId()
    {
        return $this->agencyId;
    }

    /**
     * @param string $agencyId
     * @return UserInfoMessage
     */
    public function setAgencyId($agencyId)
    {
        $this->agencyId = $agencyId;
        return $this;
    }

    /**
     * @return string
     */
    public function getPlan()
    {
        return $this->plan;
    }

    /**
     * @param string $plan
     * @return UserInfoMessage
     */
    public function setPlan($plan)
    {
        $this->plan = $plan;
        return $this;
    }

    /**
     * @return string
     */
    public function getPlanFinishDate()
    {
        return $this->planFinishDate;
    }

    /**
     * @param string $planFinishDate
     * @return UserInfoMessage
     */
    public function setPlanFinishDate($planFinishDate)
    {
        $this->planFinishDate = $planFinishDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getPlanReason()
    {
        return $this->planReason;
    }

    /**
     * @param string $planReason
     * @return UserInfoMessage
     */
    public function setPlanReason($planReason)
    {
        $this->planReason = $planReason;
        return $this;
    }

    /**
     * @return string
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * @param string $roles
     * @return UserInfoMessage
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;
        return $this;
    }
}
