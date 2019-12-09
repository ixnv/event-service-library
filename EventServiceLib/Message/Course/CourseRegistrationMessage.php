<?php

namespace EventServiceLib\Message\Course;

use EventServiceLib\Message\AbstractMessage;
use EventServiceLib\Message\Traits\ArrayEmailTrait;

class CourseRegistrationMessage extends AbstractMessage
{
    use ArrayEmailTrait;

    protected $courseTag;

    public function getEventIdentity()
    {
        return 'courseRegistration';
    }

    public function isValid()
    {
        return !$this->hasEmpty([
            $this->email,
            $this->courseTag
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

}