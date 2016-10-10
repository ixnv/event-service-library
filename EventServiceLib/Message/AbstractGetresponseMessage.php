<?php


namespace EventServiceLib\Message;

/**
 * Class AbstractGetresponseMessage
 * @package EventServiceLib\Message
 */
class AbstractGetresponseMessage extends AbstractMessage
{

    protected $name;

    protected $email;


    public function __construct($name, $email)
    {
        $this->name = !empty($name) ? $name : $email;
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return BillingMessage
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     * @return BillingMessage
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }


    function isValid()
    {
        return !empty($this->name) && !empty($this->email);
    }

}