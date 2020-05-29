<?php

namespace EventServiceLib\Message\Ppc;

use EventServiceLib\Message\Traits\ArrayEmailTrait;

class PpcPracticeSubscriptionMessage extends AbstractPpcMessage
{
    const EVENT_IDENTITY = 'ppcPracticeSubscription';

    use ArrayEmailTrait;

    protected $practiceId;
    protected $practiceName;
    protected $practiceSubscriptionEnabled;

    public function getEventIdentity()
    {
        return self::EVENT_IDENTITY;
    }

    public function isValid()
    {
        return !$this->hasEmpty(
            [
                $this->email,
                $this->practiceId,
                $this->practiceName
            ]
        );
    }

    /**
     * @return int
     */
    public function getPracticeId()
    {
        return $this->practiceId;
    }

    /**
     * @param int $practiceId
     * @return PpcPracticeSubscriptionMessage
     */
    public function setPracticeId($practiceId)
    {
        $this->practiceId = $practiceId;

        return $this;
    }

    /**
     * @return string
     */
    public function getPracticeName()
    {
        return $this->practiceName;
    }

    /**
     * @param string $practiceName
     * @return PpcPracticeSubscriptionMessage
     */
    public function setPracticeName($practiceName)
    {
        $this->practiceName = $practiceName;

        return $this;
    }

    /**
     * @return bool
     */
    public function getPracticeSubscriptionEnabled()
    {
        return $this->practiceSubscriptionEnabled;
    }

    /**
     * @param $practiceSubscriptionEnabled
     * @return PpcPracticeSubscriptionMessage
     */
    public function setPracticeSubscriptionEnabled($practiceSubscriptionEnabled)
    {
        $this->practiceSubscriptionEnabled = $practiceSubscriptionEnabled;

        return $this;
    }
}
