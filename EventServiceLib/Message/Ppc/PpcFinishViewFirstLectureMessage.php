<?php

namespace EventServiceLib\Message\Ppc;

use EventServiceLib\Message\Traits\ArrayEmailTrait;

final class PpcFinishViewFirstLectureMessage extends AbstractPpcMessage
{
    const EVENT_IDENTITY = 'ppcFinishViewFirstLecture';

    use ArrayEmailTrait;

    private $courseIdentity;

    /**
     * @return bool
     */
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
