<?php

namespace EventServiceLib\Message\Tasks;

use EventServiceLib\Message\AbstractMessage;

final class TaskCreatedMessage extends AbstractMessage
{
    const EVENT_IDENTITY = 'taskCreated';

    private $description;
    private $assignee;
    private $deadline;
    private $actionPlace;
    private $tasksCreatedCount;
    private $userId;

    /**
     * @return bool
     */
    public function isValid()
    {
        return !$this->hasEmpty(
            [
                $this->userId,
                $this->description,
                $this->assignee,
                $this->deadline,
                $this->actionPlace
            ]
        );
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return TaskCreatedMessage
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getAssignee()
    {
        return $this->assignee;
    }

    /**
     * @param string $assignee
     * @return TaskCreatedMessage
     */
    public function setAssignee($assignee)
    {
        $this->assignee = $assignee;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeadline()
    {
        return $this->deadline;
    }

    /**
     * @param string $deadline
     * @return TaskCreatedMessage
     */
    public function setDeadline($deadline)
    {
        $this->deadline = $deadline;
        return $this;
    }

    /**
     * @return string
     */
    public function getActionPlace()
    {
        return $this->actionPlace;
    }

    /**
     * @param string $actionPlace
     * @return TaskCreatedMessage
     */
    public function setActionPlace($actionPlace)
    {
        $this->actionPlace = $actionPlace;
        return $this;
    }

    /**
     * @return int
     */
    public function getTasksCreatedCount()
    {
        return $this->tasksCreatedCount;
    }

    /**
     * @param int $tasksCreatedCount
     * @return TaskCreatedMessage
     */
    public function setTasksCreatedCount($tasksCreatedCount)
    {
        $this->tasksCreatedCount = $tasksCreatedCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     * @return TaskCreatedMessage
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }
}
