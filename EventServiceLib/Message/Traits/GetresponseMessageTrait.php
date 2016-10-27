<?php

namespace EventServiceLib\Message\Traits;


trait GetresponseMessageTrait
{

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
     * @return $this
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