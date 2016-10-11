<?php

namespace EventServiceLib\Message;
use EventServiceLib\Message\Traits\AmoCrmMessageTrait;
use EventServiceLib\Message\Traits\ArrayEmailTrait;
use EventServiceLib\Message\Traits\GetresponseMessageTrait;


/**
 * Class AbstractMessage
 * @package EventServiceLib\Message
 */
abstract class AbstractMessage
{

    use GetresponseMessageTrait;
    use AmoCrmMessageTrait;
    use ArrayEmailTrait;

    /**
     * @var array
     */
    protected $orphanFields = [];


    /**
     * @param array $messageFields
     */
    public function fromArray(array $messageFields)
    {
        foreach ($messageFields as $fieldName => $value) {
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


    public function isValid()
    {
        return !empty($this->email) && !empty($this->elamaLogin) && !empty($this->name);
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





}