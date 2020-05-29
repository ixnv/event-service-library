<?php

namespace EventServiceLib\Message\Ppc;

use EventServiceLib\Message\Traits\ArrayEmailTrait;

class PpcFinishViewFirstLectureMessage extends AbstractPpcMessage
{
    const EVENT_IDENTITY = 'ppcFinishViewFirstLecture';

    use ArrayEmailTrait;

    /** @var string $courseIdentity */
    protected $courseIdentity;

    public function getEventIdentity()
    {
        return self::EVENT_IDENTITY;
    }

    public function isValid()
    {
        return !$this->hasEmpty(
            [
                $this->email,
                $this->courseIdentity,
            ]
        );
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
     * @return $this
     */
    public function setCourseIdentity($courseIdentity)
    {
        $this->courseIdentity = $courseIdentity;

        return $this;
    }
}
