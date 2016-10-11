<?php


namespace EventServiceLib\Message;


class StatusChangeMessage extends AbstractMessage
{
    protected $status;
    protected $statusComment;

    function getEventIdentity()
    {
        return 'statusChange';
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
     * @return StatusChangeMessage
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
     * @return StatusChangeMessage
     */
    public function setStatusComment($statusComment)
    {
        $this->statusComment = $statusComment;
        return $this;
    }



}