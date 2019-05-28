<?php declare(strict_types=1);

namespace EventServiceLib\Message\Optimove;

use EventServiceLib\Message\AbstractMessage;
use EventServiceLib\Message\ProjectSpecificMessageInterface;

class OptimoveAttendedWebinarMessage extends AbstractMessage implements ProjectSpecificMessageInterface
{

    protected $email;
    protected $webinarId;

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return OptimoveAttendedWebinarMessage
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string
     */
    public function getWebinarId()
    {
        return $this->webinarId;
    }

    /**
     * @param string $webinarId
     *
     * @return OptimoveAttendedWebinarMessage
     */
    public function setWebinarId($webinarId)
    {
        $this->webinarId = $webinarId;

        return $this;
    }

    /**
     * @return bool
     */
    public function isValid()
    {
        return !$this->hasEmpty([
            $this->email,
            $this->webinarId,
        ]);
    }

    /**
     * @return string
     */
    function getEventIdentity()
    {
        return 'optimoveAttendedWebinar';
    }

    /**
     * @return string
     */
    public function getProjectIdentity()
    {
        return 'Optimove';
    }

    /**
     * @return string
     */
    public function getProjectPossession()
    {
        return 'Optimove';
    }

}