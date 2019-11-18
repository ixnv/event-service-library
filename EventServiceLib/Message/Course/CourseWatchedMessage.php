<?php

namespace EventServiceLib\Message\Course;

use EventServiceLib\Message\AbstractMessage;
use EventServiceLib\Message\Traits\ArrayEmailTrait;

class CourseWatchedMessage extends AbstractMessage
{
    use ArrayEmailTrait;

    protected $courseTag;

    public function getEventIdentity()
    {
        return 'courseWatched';
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
     * @return CourseWatchedMessage
     */
    public function setCourseTag($courseTag)
    {
        $this->courseTag = $courseTag;

        return $this;
    }

}