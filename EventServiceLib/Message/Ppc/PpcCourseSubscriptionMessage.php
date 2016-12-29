<?php

namespace EventServiceLib\Message\Ppc;


use EventServiceLib\Message\Traits\ArrayEmailTrait;

class PpcCourseSubscriptionMessage extends AbstractPpcMessage
{
    use ArrayEmailTrait;

    protected $name;

    protected $courseName;

    protected $courseId;

    protected $courseStartDate;

    public function getEventIdentity()
    {
        return 'ppcCourseSubscription';
    }

    public function isValid()
    {
        return !$this->hasEmpty([
            $this->email,
            $this->name
        ]);
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getCourseName()
    {
        return $this->courseName;
    }

    /**
     * @param mixed $courseName
     */
    public function setCourseName($courseName)
    {
        $this->courseName = $courseName;
    }

    /**
     * @return mixed
     */
    public function getCourseId()
    {
        return $this->courseId;
    }

    /**
     * @param mixed $courseId
     */
    public function setCourseId($courseId)
    {
        $this->courseId = $courseId;
    }

    /**
     * @return mixed
     */
    public function getCourseStartDate()
    {
        return $this->courseStartDate;
    }

    /**
     * @param mixed $courseStartDate
     */
    public function setCourseStartDate($courseStartDate)
    {
        $this->courseStartDate = $courseStartDate instanceof \DateTime ? $courseStartDate->format('Y-m-d H:i:s') : $courseStartDate;
    }


}