<?php


namespace EventServiceLib\Message;


use EventServiceLib\Message\Traits\ArrayEmailTrait;
use EventServiceLib\Message\Traits\GetresponseMessageTrait;

class AgencyAddMessage extends AbstractMessage
{

    use GetresponseMessageTrait;
    use ArrayEmailTrait;

    protected $status;
    protected $statusComment;

    /**
     * @return string
     */
    function getEventIdentity()
    {
        return 'agencyAdd';
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     *
     * @return AgencyAddMessage
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatusComment()
    {
        return $this->statusComment;
    }

    /**
     * @param mixed $statusComment
     *
     * @return AgencyAddMessage
     */
    public function setStatusComment($statusComment)
    {
        $this->statusComment = $statusComment;

        return $this;
    }

    /**
     * @return bool
     */
    public function isValid()
    {
        return !$this->hasEmpty([
            $this->name,
            $this->email,
            $this->status,
        ]);
    }

}