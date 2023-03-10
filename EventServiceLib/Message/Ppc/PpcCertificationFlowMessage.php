<?php

namespace EventServiceLib\Message\Ppc;

use EventServiceLib\Message\Traits\ArrayEmailTrait;

final class PpcCertificationFlowMessage extends AbstractPpcMessage
{
    const EVENT_IDENTITY = 'ppcCertificationFlow';

    use ArrayEmailTrait;

    private $numAttempt;
    private $typeCertification;
    private $complete = false;

    /**
     * @return bool
     */
    public function isValid()
    {
        return !$this->hasEmpty(
            [
                $this->numAttempt,
                $this->typeCertification,

            ]
        );
    }

    /**
     * @return bool
     */
    public function isComplete()
    {
        return $this->complete;
    }

    /**
     * @param bool $complete
     * @return PpcCertificationFlowMessage
     */
    public function setComplete($complete)
    {
        $this->complete = $complete;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumAttempt()
    {
        return $this->numAttempt;
    }

    /**
     * @param int $numAttempt
     * @return PpcCertificationFlowMessage
     */
    public function setNumAttempt($numAttempt)
    {
        $this->numAttempt = $numAttempt;
        return $this;
    }

    /**
     * @return string
     */
    public function getTypeCertification()
    {
        return $this->typeCertification;
    }

    /**
     * @param string $typeCertification
     * @return PpcCertificationFlowMessage
     */
    public function setTypeCertification($typeCertification)
    {
        $this->typeCertification = $typeCertification;
        return $this;
    }
}
