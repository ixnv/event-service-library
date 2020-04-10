<?php

namespace EventServiceLib\Message\Ppc;

use EventServiceLib\Message\Traits\ArrayEmailTrait;

class PpcSuccessPayCourseMessage extends AbstractPpcMessage
{
    use ArrayEmailTrait;

    protected $name;
    protected $surname;
    protected $courseIdentity;

    public function getEventIdentity()
    {
        return 'ppcSuccessPayCourse';
    }

    public function isValid()
    {
        return !$this->hasEmpty([
            $this->email,
            $this->name,
            $this->surname,
            $this->courseIdentity,
        ]);
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
     *
     * @return PpcSuccessPayCourseMessage
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param string $surname
     *
     * @return PpcSuccessPayCourseMessage
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * @return string
     */
    public function getCourseIdentity()
    {
        return $this->courseIdentity;
    }

    /**
     * @param string $courseIdentity
     *
     * @return PpcSuccessPayCourseMessage
     */
    public function setCourseIdentity($courseIdentity)
    {
        $this->courseIdentity = $courseIdentity;

        return $this;
    }

}