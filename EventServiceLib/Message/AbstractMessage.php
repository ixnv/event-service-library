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
     * @param array $messageArray
     */
    public function fromArray(array $messageArray)
    {
        foreach ($messageArray as $fieldName => $value) {
            if (property_exists($this, $fieldName)) {
                $this->$fieldName = $value;
            } else {
                $this->orphanFields[] = [
                    $this->$fieldName => $value
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


    function isValid()
    {
        return true;
    }

}