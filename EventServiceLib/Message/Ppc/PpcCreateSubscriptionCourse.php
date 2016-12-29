<?php

namespace EventServiceLib\Message\Ppc;


class PpcCreateSubscriptionCourse extends AbstractPpcMessage
{
    protected $name;

    protected $id;

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
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
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

}