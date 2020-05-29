<?php

namespace EventServiceLib\Message\Ppc;

class PpcOpenCourseBySubscriptionMessage extends AbstractPpcMessage
{
    const EVENT_IDENTITY = 'ppcOpenCourseBySubscription';

    protected $courseId;
    protected $courseName;
    protected $courseUrl;
    protected $emailMarkup;
    protected $isComplexCourse;

    public function getEventIdentity()
    {
        return self::EVENT_IDENTITY;
    }

    public function isValid()
    {
        return !$this->hasEmpty(
            [
                $this->courseId,
                $this->courseName,
                $this->courseUrl,
                $this->emailMarkup,
            ]
        );
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
     * @return PpcOpenCourseBySubscriptionMessage
     */
    public function setCourseId($courseId)
    {
        $this->courseId = $courseId;

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
     * @return PpcOpenCourseBySubscriptionMessage
     */
    public function setCourseName($courseName)
    {
        $this->courseName = $courseName;

        return $this;
    }

    /**
     * @return string
     */
    public function getCourseUrl()
    {
        return $this->courseUrl;
    }

    /**
     * @param string $courseUrl
     * @return PpcOpenCourseBySubscriptionMessage
     */
    public function setCourseUrl($courseUrl)
    {
        $this->courseUrl = $courseUrl;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmailMarkup()
    {
        return $this->emailMarkup;
    }

    /**
     * @param mixed $emailMarkup
     * @return PpcOpenCourseBySubscriptionMessage
     */
    public function setEmailMarkup($emailMarkup)
    {
        $this->emailMarkup = $emailMarkup;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsComplexCourse()
    {
        return $this->isComplexCourse;
    }

    /**
     * @param bool $isComplexCourse
     * @return PpcOpenCourseBySubscriptionMessage
     */
    public function setIsComplexCourse($isComplexCourse)
    {
        $this->isComplexCourse = $isComplexCourse;

        return $this;
    }
}
