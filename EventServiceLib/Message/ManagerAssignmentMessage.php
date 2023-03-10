<?php

namespace EventServiceLib\Message;

/**
 * Событие изменения персонального менеджера пользователя.
 */
final class ManagerAssignmentMessage extends AbstractMessage
{
    const EVENT_IDENTITY = 'managerAssignment';

    /**
     * Идентификатор пользователя в eLama, менеджер которого был изменен
     *
     * @var int
     */
    private $elamaId;

    /**
     * Идентификатор назначенного менеджера в eLama,
     * NULL, если пользователь остался не привязанным ни к одному из менеджеров
     *
     * @var int|null
     */
    private $managerId;

    /**
     * @return bool
     */
    public function isValid()
    {
        return !$this->hasEmpty(
            [
                $this->elamaId,
            ]
        );
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
