<?php

namespace EventServiceLib\Message;

/**
 * Событие изменения персонального менеджера пользователя.
 */
class ManagerAssignmentMessage extends AbstractMessage
{

    /**
     * Идентификатор пользователя в eLama, менеджер которого был изменен
     *
     * @var int
     */
    protected $elamaId;

    /**
     * Идентификатор назначенного менеджера в eLama,
     * NULL, если пользователь остался не привязанным ни к одному из менеджеров
     *
     * @var int|null
     */
    protected $managerId;

    /**
     * @return string
     */
    function getEventIdentity()
    {
        return 'managerAssignment';
    }

    /**
     * @return bool
     */
    public function isValid()
    {
        return !$this->hasEmpty([
            $this->elamaId,
        ]);
    }

    /**
     * @return int
     */
    public function getElamaId()
    {
        return $this->elamaId;
    }

    /**
     * @param int $elamaId
     * @return $this
     */
    public function setElamaId($elamaId)
    {
        $this->elamaId = $elamaId;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getManagerId()
    {
        return $this->managerId;
    }

    /**
     * @param int|null $managerId
     * @return $this
     */
    public function setManagerId($managerId)
    {
        $this->managerId = $managerId;

        return $this;
    }

}