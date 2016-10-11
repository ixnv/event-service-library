<?php

namespace EventServiceLib\Message\Traits;


trait GetresponseMessageTrait
{

    use ArrayEmailTrait;

    protected $name;

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


    function isValid()
    {
        return !empty($this->name) && !empty($this->email);
    }

}