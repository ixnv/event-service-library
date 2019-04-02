<?php declare(strict_types=1);

namespace EventServiceLib\Message\Infosite;

use EventServiceLib\Message\AbstractMessage;
use EventServiceLib\Message\ProjectSpecificMessageInterface;

class InfositeFilledBriefIoMessage extends AbstractMessage implements ProjectSpecificMessageInterface
{

    protected $formData;

    /**
     * @return array
     */
    public function getFormData()
    {
        return $this->formData;
    }

    /**
     * @param array $formData
     *
     * @return InfositeFilledBriefIoMessage
     */
    public function setFormData($formData)
    {
        $this->formData = $formData;

        return $this;
    }

    /**
     * @return bool
     */
    public function isValid()
    {
        return !$this->hasEmpty([
            $this->formData
        ]);
    }

    /**
     * @return string
     */
    public function getEventIdentity()
    {
        return 'infositeFilledBriefIo';
    }

    /**
     * @return string
     */
    public function getProjectIdentity()
    {
        return 'Infosite';
    }

    /**
     * @return string
     */
    public function getProjectPossession()
    {
        return 'Infosite';
    }

}