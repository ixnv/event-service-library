<?php

namespace EventServiceLib\Message\Infosite;

use EventServiceLib\Message\AbstractMessage;

final class InfositeFilledBriefIoMessage extends AbstractMessage
{
    const EVENT_IDENTITY = 'infositeFilledBriefIo';

    private $formData;

    /**
     * @return bool
     */
    public function isValid()
    {
        return !$this->hasEmpty(
            [
                $this->formData
            ]
        );
    }

    /**
     * @return array
     */
    public function getFormData()
    {
        return $this->formData;
    }

    /**
     * @param array $formData
     * @return InfositeFilledBriefIoMessage
     */
    public function setFormData($formData)
    {
        $this->formData = $formData;
        return $this;
    }
}
