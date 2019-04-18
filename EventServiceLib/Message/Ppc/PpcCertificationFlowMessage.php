<?php

namespace EventServiceLib\Message\Ppc;

use EventServiceLib\Message\Traits\ArrayEmailTrait;

class PpcCertificationFlowMessage extends AbstractPpcMessage
{
    use ArrayEmailTrait;

    const STAGE_START = 'start'; //первая попытка прохождения сертификации
    const STAGE_CONTINUE = 'continue'; // n-нная попытка прохождения сертификации
    const STAGE_SUCCESSFULLY_PASSED = 'successfully_passed'; // успешное прохождение сертификации

    private $stage;
    private $numAttempt;
    private $typeCertification;

    public function getEventIdentity()
    {
        return 'ppcCertificationFlow';
    }

    public function isValid()
    {
        return !$this->hasEmpty([
            $this->stage,
            $this->numAttempt,
            $this->typeCertification
        ]);
    }

    /**
     * @return string
     */
    public function getStage()
    {
        return $this->stage;
    }

    /**
     * @param string $stage
     *
     * @return PpcCertificationFlowMessage
     */
    public function setStage($stage)
    {
        $this->stage = $stage;

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