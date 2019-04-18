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
            $this->name,
            $this->courseId
        ]);
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
     *
     * @return PpcCourseSubscriptionMessage
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
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
     *
     * @return PpcCourseSubscriptionMessage
     */
    public function setCourseName($courseName)
    {
        $this->courseName = $courseName;

        return $this;
    }

    /**
     * @return int
     */
    public function getCourseId()
    {
        return $this->courseId;
    }

    /**
     * @param int $courseId
     *
     * @return PpcCourseSubscriptionMessage
     */
    public function setCourseId($courseId)
    {
        $this->courseId = $courseId;

        return $this;
    }

    /**
     * @return string
     */
    public function getCourseStartDate()
    {
        return $this->courseStartDate;
    }

    /**
     * @param string $courseStartDate
     *
     * @return PpcCourseSubscriptionMessage
     */
    public function setCourseStartDate($courseStartDate)
    {
        $this->courseStartDate = $courseStartDate instanceof \DateTime ? $courseStartDate->format('Y-m-d H:i:s') : $courseStartDate;

        return $this;
    }

}