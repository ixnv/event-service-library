<?php

namespace EventServiceLib\Message\Course;

use EventServiceLib\Message\AbstractMessage;
use EventServiceLib\Message\Traits\ArrayEmailTrait;

class CourseRegistrationMessage extends AbstractMessage
{
    use ArrayEmailTrait;

    protected $courseTag;
    protected $name;
    protected $phone;

    public function getEventIdentity()
    {
        return 'courseRegistration';
    }

    public function isValid()
    {
        return !$this->hasEmpty([
            $this->email,
            $this->courseTag,
            $this->name
        ]);
    }

    /**
     * @return string
     */
    public function getCourseTag()
    {
        return $this->courseTag;
    }

    /**
     * @param string $courseTag
     * @return CourseRegistrationMessage
     */
    public function setCourseTag($courseTag)
    {
        $this->courseTag = $courseTag;

        return $this;
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
     * @return CourseRegistrationMessage
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     * @return CourseRegistrationMessage
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

}