<?php

namespace EventServiceLib\Message\Tools;

use EventServiceLib\Message\AbstractMessage;

/** Пользователь подключил инструмент */
class ToolsConnectMessage extends AbstractMessage
{
    const EVENT_IDENTITY = 'toolsConnect';

    private $elamaId;
    private $email;
    private $toolName;
    private $userLocale;
    private $date; // дата подключения

    /**
     * @return bool
     */
    public function isValid()
    {
        return
            !$this->hasEmpty([$this->toolName]) && (
                !$this->hasEmpty(
                    [
                        $this->email,
                        $this->userLocale
                    ]
                ) ||
                !$this->hasEmpty([$this->elamaId])
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
     * @return ToolsConnectMessage
     */
    public function setElamaId($elamaId)
    {
        $this->elamaId = $elamaId;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return ToolsConnectMessage
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getToolName()
    {
        return $this->toolName;
    }

    /**
     * @param string $toolName
     * @return ToolsConnectMessage
     */
    public function setToolName($toolName)
    {
        $this->toolName = $toolName;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserLocale()
    {
        return $this->userLocale;
    }

    /**
     * @param string $userLocale
     * @return ToolsConnectMessage
     */
    public function setUserLocale($userLocale)
    {
        $this->userLocale = $userLocale;
        return $this;
    }

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param string $date
     * @return ToolsConnectMessage
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }
}
