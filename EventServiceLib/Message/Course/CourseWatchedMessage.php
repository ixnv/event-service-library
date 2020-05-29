<?php

namespace EventServiceLib\Message\Course;

use EventServiceLib\Message\AbstractMessage;
use EventServiceLib\Message\Traits\ArrayEmailTrait;

final class CourseWatchedMessage extends AbstractMessage
{
    const EVENT_IDENTITY = 'courseWatched';

    use ArrayEmailTrait;

    private $courseTag;

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
