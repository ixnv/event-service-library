<?php

namespace EventServiceLib\Message\Elama;

use EventServiceLib\Message\AbstractMessage;

class ChangeUserUnitTypeMessage extends AbstractMessage
{
    const EVENT_IDENTITY = 'changeUserUnitType';

    const UNIT_TYPE_SELF_SERVICE = 'self_service';
    const UNIT_TYPE_AGENCY = 'agency';
    const UNIT_TYPE_AGENCY_CLIENT = 'agency_client';

    protected $elamaId;
    protected $email;
    protected $unitType;

    /**
     * @return string
     */
    function getEventIdentity()
    {
        return self::EVENT_IDENTITY;
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
     * @return ChangeUserUnitTypeMessage
     */
    public function setElamaId($elamaId)
    {
        $this->elamaId = $elamaId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return ChangeUserUnitTypeMessage
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string
     */
    public function getUnitType()
    {
        return $this->unitType;
    }

    /**
     * @param string $unitType
     * @return ChangeUserUnitTypeMessage
     */
    public function setUnitType($unitType)
    {
        $this->unitType = $unitType;

        return $this;
    }

    /**
     * @return bool
     */
    public function isValid()
    {
        return !$this->hasEmpty(
                [
                    $this->elamaId,
                ]
            )
            && (!$this->unitType || in_array(
                    $this->unitType,
                    [
                        self::UNIT_TYPE_AGENCY,
                        self::UNIT_TYPE_AGENCY_CLIENT,
                        self::UNIT_TYPE_SELF_SERVICE,
                    ]
                ));
    }
}
