<?php


namespace EventServiceLib\Message\Traits;


trait ArrayEmailTrait
{
    protected $email = [];

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
        $this->email = is_array($email) ? $email : [$email];
        return $this;
    }

    public function addEmail($email)
    {
        $this->email[] = $email;
    }

}