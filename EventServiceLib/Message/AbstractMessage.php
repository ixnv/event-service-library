<?php

namespace EventServiceLib\Message;

abstract class AbstractMessage implements MessageInterface
{
    protected $orphanFields = [];
    protected $messageUniqId = '';

    /**
     * Test method to restore message state.
     * To setup message use setters.
     *
     * @param array $messageFields
     */
    public function fromArray(array $messageFields)
    {
        foreach ($messageFields as $fieldName => $value) {
            if (property_exists($this, $fieldName)) {
                $this->$fieldName = $value;
            } else {
                $this->orphanFields[] = [
                    $fieldName => $value,
                ];
            }
        }
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $vars = get_object_vars($this);

        foreach ($vars as $name => $value) {
            if ($value === null) {
                unset($vars[$name]);
            }
        }

        return $vars;
    }

    /**
     * @return bool
     */
    abstract public function isValid();

    /**
     * Return event text identity set in EVENT_IDENTITY constant
     *
     * @return string
     */
    public function getEventIdentity()
    {
        return self::EVENT_IDENTITY;
    }

    /**
     * @return array
     */
    public function getOrphanFields()
    {
        return $this->orphanFields;
    }

    /**
     * @param array $values
     * @return bool
     */
    public function hasEmpty(array $values)
    {
        foreach ($values as $value) {
            if (empty($value)) {
                return true;
            }
        }

        return false;
    }

    /**
     * @return string
     */
    public function getMessageUniqId()
    {
        return $this->messageUniqId;
    }
}
