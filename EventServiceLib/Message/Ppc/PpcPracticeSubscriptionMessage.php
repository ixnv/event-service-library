<?php

namespace EventServiceLib\Message\Ppc;

use EventServiceLib\Message\Traits\ArrayEmailTrait;

class PpcPracticeSubscriptionMessage extends AbstractPpcMessage
{
    use ArrayEmailTrait;

    private $practiceId;
    private $practiceName;
    private $practiceSubscriptionEnabled;

    public function getEventIdentity()
    {
        return 'ppcPracticeSubscription';
    }

    public function isValid()
    {
        return !$this->hasEmpty([
            $this->email,
            $this->practiceId,
            $this->practiceName,
            $this->practiceSubscriptionEnabled
        ]);
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
     *
     * @return $this
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
     *
     * @return $this
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
     *
     * @return $this
     */
    public function setPracticeSubscriptionEnabled($practiceSubscriptionEnabled)
    {
        $this->practiceSubscriptionEnabled = $practiceSubscriptionEnabled;

        return $this;
    }

}