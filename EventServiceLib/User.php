<?php


namespace EventServiceLib;


class User
{
    private $name;
    private $email;
    private $purchase_date;
    private $registration_date;
    private $status;
    private $statusComment;
    private $agencyNotificationUrl;

    public function __construct($name, $email)
    {
        $this->name = !empty($name) ? $name : $email;
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
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
    public function getAgencyNotificationUrl()
    {
        return $this->agencyNotificationUrl;
    }

    /**
     * @param mixed $agencyNotificationUrl
     */
    public function setAgencyNotificationUrl($agencyNotificationUrl)
    {
        $this->agencyNotificationUrl = $agencyNotificationUrl;
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