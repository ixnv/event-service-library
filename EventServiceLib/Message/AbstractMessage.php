<?php

namespace EventServiceLib\Message;


/**
 * Class AbstractMessage
 * @package EventServiceLib\Message
 */
abstract class AbstractMessage
{

    /**
     * @var array
     */
    protected $orphanFields = [];

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
    public function isValid()
    {
        return true; #TODO: IMPLEMENT IN MESSAGES
    }

    /**
     * Return event text identity. E.g. 'billing'
     *
     * @return string
     */
    abstract function getEventIdentity();

    /**
     * @return array
     */
    public function getOrphanFields()
    {
        return $this->orphanFields;
    }

    /**
     * @param array $values
     *
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

}