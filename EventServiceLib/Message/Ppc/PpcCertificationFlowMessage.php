<?php

namespace EventServiceLib\Message\Ppc;

use EventServiceLib\Message\Traits\ArrayEmailTrait;

class PpcCertificationFlowMessage extends AbstractPpcMessage
{
    use ArrayEmailTrait;

    const STATUS_PASSED = 1; // сертификация пройдена
    const STATUS_FAILED = 0; // сертификация не пройдена

    private $status;
    private $numAttempt;
    private $typeCertification;

    public function getEventIdentity()
    {
        return 'ppcCertificationFlow';
    }

    public function isValid()
    {
        return !$this->hasEmpty([
            $this->status,
            $this->numAttempt,
            $this->typeCertification
        ]);
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param int $status
     *
     * @return PpcCertificationFlowMessage
     */
    public function setStatus($status)
    {
        $this->status = $status;

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
     *
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
     *
     * @return PpcCertificationFlowMessage
     */
    public function setTypeCertification($typeCertification)
    {
        $this->typeCertification = $typeCertification;

        return $this;
    }

}