<?php

namespace EventServiceLib\Message;

abstract class AbstractMessage implements MessageInterface
{
    protected $orphanFields = [];
    protected $messageUniqId = '';

    public function __construct()
    {
        if (!defined('static::EVENT_IDENTITY'))
        {
            throw new \Exception('Constant EVENT_IDENTITY is not defined on subclass ' . get_class($this));
        }
    }

    /**
     * Test method to restore message state.
     * To setup message use setters.
     *
     * @param array $messageFields
     */
    public function fromArray(array $messageFields)
    {
        $reflection = new \ReflectionClass($this);
        foreach ($messageFields as $fieldName => $value) {
            if (property_exists($this, $fieldName)) {
                $property = $reflection->getProperty($fieldName);
                $property->setAccessible(true);
                $property->setValue($this, $value);
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
        $reflection = new \ReflectionClass($this);
        /** @var \ReflectionProperty[] $fields */
        $fields = $reflection->getProperties();
        $vars = [];
        foreach ($fields as $field) {
            $field->setAccessible(true);
            if ($field->getValue($this) !== null) {
                $vars[$field->getName()] = $field->getValue($this);
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
        return static::EVENT_IDENTITY;
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
