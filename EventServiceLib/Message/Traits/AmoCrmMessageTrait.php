<?php

namespace EventServiceLib\Message\Traits;

trait AmoCrmMessageTrait
{
    protected $elamaLogin;

    /**
     * @return mixed
     */
    public function getElamaLogin()
    {
        return $this->elamaLogin;
    }

    /**
     * @param mixed $elamaLogin
     * @return AmoCrmMessageTrait
     */
    public function setElamaLogin($elamaLogin)
    {
        $this->elamaLogin = $elamaLogin;

        return $this;
    }
}
