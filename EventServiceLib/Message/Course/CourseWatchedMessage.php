<?php

namespace EventServiceLib\Message\Course;

use EventServiceLib\Message\AbstractMessage;
use EventServiceLib\Message\Traits\ArrayEmailTrait;

class CourseWatchedMessage extends AbstractMessage
{
    const EVENT_IDENTITY = 'courseWatched';

    use ArrayEmailTrait;

    protected $courseTag;

    public function getEventIdentity()
    {
        return self::EVENT_IDENTITY;
    }

    public function isValid()
    {
        return !$this->hasEmpty(
            [
                $this->email,
                $this->courseTag
            ]
        );
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
