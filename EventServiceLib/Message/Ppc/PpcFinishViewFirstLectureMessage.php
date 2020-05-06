<?php

namespace EventServiceLib\Message\Ppc;

use EventServiceLib\Message\Traits\ArrayEmailTrait;

class PpcFinishViewFirstLectureMessage extends AbstractPpcMessage
{
    use ArrayEmailTrait;

    /** @var string  $courseIdentity*/
    protected $courseIdentity;

    public function getEventIdentity()
    {
        return 'ppcFinishViewFirstLecture';
    }

    public function isValid()
    {
        return !$this->hasEmpty([
            $this->email,
            $this->courseIdentity,
        ]);
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