<?php

namespace EventServiceLib\Message\Ppc;

final class PpcCoursesSubscriptionMessage extends AbstractPpcMessage
{
    const EVENT_IDENTITY = 'ppcCoursesSubscription';

    private $email;
    private $name;

    /**
     * @return bool
     */
    public function isValid()
    {
        return !$this->hasEmpty(
            [
                $this->email,
                $this->name
            ]
        );
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return PpcCoursesSubscriptionMessage
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return PpcCoursesSubscriptionMessage
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }
}

