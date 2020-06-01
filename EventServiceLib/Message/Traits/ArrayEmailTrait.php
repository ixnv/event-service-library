<?php

namespace EventServiceLib\Message\Traits;

trait ArrayEmailTrait
{
    protected $email = [];

    /**
     * @return array
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param array|string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = is_array($email) ? $email : [$email];
        return $this;
    }

    /**
     * @param string $email
     */
    public function addEmail($email)
    {
        $this->email[] = $email;
    }
}
