<?php

namespace EventServiceLib\Message\Ppc;

use EventServiceLib\Message\Traits\ArrayEmailTrait;

class PpcFinishViewLectureMessage extends AbstractPpcMessage
{
    use ArrayEmailTrait;

    /** @var string  $courseName*/
    protected $courseName;

    /** @var string  $lectureName*/
    protected $lectureName;

    public function getEventIdentity()
    {
        return 'ppcFinishViewLecture';
    }

    public function isValid()
    {
        return !$this->hasEmpty([
            $this->email,
            $this->courseName,
            $this->lectureName
        ]);
    }

    /**
     * @return string
     */
    public function getCourseName()
    {
        return $this->courseName;
    }

    /**
     * @param string $courseName
     * @return $this
     */
    public function setCourseName($courseName)
    {
        $this->courseName = $courseName;

        return $this;
    }

    /**
     * @return string
     */
    public function getLectureName()
    {
        return $this->lectureName;
    }

    /**
     * @param string $lectureName
     * @return $this
     */
    public function setLectureName($lectureName)
    {
        $this->lectureName = $lectureName;

        return $this;
    }

}