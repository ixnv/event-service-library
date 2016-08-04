<?php
/**
 * Created by PhpStorm.
 * User: elama
 * Date: 28.07.16
 * Time: 13:36
 */

namespace EventServiceLib;


class User
{
    private $email;
    private $name;
    private $purchase_date;
    private $registration_date;

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

    public function toArray()
    {
        return get_object_vars($this);
    }


    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }


}