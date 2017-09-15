<?php

namespace EventServiceLib\Message\Ppc;


class PpcCreateSubscriptionCourseMessage extends AbstractPpcMessage
{
    protected $name;

    protected $id;

    protected $emailMarkup;

    public function getEventIdentity()
    {
        return 'ppcCreateSubscriptionCourse';
    }

    public function isValid()
    {
        return !$this->hasEmpty([
            $this->name,
            $this->id,
        ]);
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return PpcCreateSubscriptionCourse
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmailMarkup()
    {
        return $this->emailMarkup;
    }

    /**
     * @param mixed $emailMarkup
     * @return PpcCreateSubscriptionCourseMessage
     */
    public function setEmailMarkup($emailMarkup)
    {
        $this->emailMarkup = $emailMarkup;

        return $this;
    }
}