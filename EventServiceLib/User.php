<?php


namespace EventServiceLib;

trigger_error('Использовать реализации AbstractMessage вместо User', E_USER_DEPRECATED);

/**
 * Class User
 * @deprecated @see AbstractMessage
 * @package EventServiceLib
 */
class User
{
    private $name;
    private $email;
    private $purchase_date;
    private $registration_date;
    private $status;
    private $statusComment;
    private $agencyNotificationClientId;
    private $agencyNotificationClientHash;

    public function __construct($name, $email)
    {
        $this->name = !empty($name) ? $name : $email;
        $this->email = $email;
    }

    /**
     * @param bool $asArray
     * @return mixed
     */
    public function getEmail($asArray = false)
    {
        if ($asArray && is_array($this->email)) {
            return $this->email;
        } elseif ($asArray && !is_array($this->email)) {
            return [$this->email];
        }

        if (!$asArray && is_array($this->email)) {
            return $this->email[0];
        } elseif (!$asArray && !is_array($this->email)) {
            return $this->email;
        }

        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getPurchaseDate()
    {
        return $this->purchase_date;
    }

    /**
     * @param mixed $purchase_date
     */
    public function setPurchaseDate($purchase_date)
    {
        $this->purchase_date = $purchase_date;
    }

    /**
     * @return mixed
     */
    public function getRegistrationDate()
    {
        return $this->registration_date;
    }

    /**
     * @param mixed $registration_date
     */
    public function setRegistrationDate($registration_date)
    {
        $this->registration_date = $registration_date;
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
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getStatusComment()
    {
        return $this->statusComment;
    }

    /**
     * @param mixed $statusComment
     */
    public function setStatusComment($statusComment)
    {
        $this->statusComment = $statusComment;
    }

    /**
     * @return mixed
     */
    public function getAgencyNotificationClientId()
    {
        return $this->agencyNotificationClientId;
    }

    /**
     * @param mixed $agencyNotificationClientId
     */
    public function setAgencyNotificationClientId($agencyNotificationClientId)
    {
        $this->agencyNotificationClientId = $agencyNotificationClientId;
    }

    /**
     * @return mixed
     */
    public function getAgencyNotificationClientHash()
    {
        return $this->agencyNotificationClientHash;
    }

    /**
     * @param mixed $agencyNotificationClientHash
     */
    public function setAgencyNotificationClientHash($agencyNotificationClientHash)
    {
        $this->agencyNotificationClientHash = $agencyNotificationClientHash;
    }

    public function toArray()
    {
        $vars = get_object_vars($this);

        foreach ($vars as $name => $value) {
            if ($value === null) {
                unset($vars[$name]);
            }
        }

        return $vars;
    }
}