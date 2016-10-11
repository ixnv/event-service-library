<?php


namespace EventServiceLib\Message;


class AgencyAddMessage extends AbstractMessage
{

    protected $status;
    protected $statusComment;

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
     * @return AgencyAddMessage
     */
    public function setStatusComment($statusComment)
    {
        $this->statusComment = $statusComment;
        return $this;
    }



}