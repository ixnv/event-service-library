<?php

namespace EventServiceLib\Message;

class FilledOutFormMessage extends AbstractMessage
{

    const FORM_SKYPE_PRESENTATION = 1;
    const FORM_MESSAGE_TO_MANAGER = 2;
    const FORM_GET_CONSULTATION = 3;
    const FORM_CALL_ME = 4;
    const FORM_PARTNERS = 5;
    const FORM_BRIEF_CREATE_CAMPAIGN = 6;

    protected $email;

    protected $phone;

    protected $name;

    protected $formName;

    protected $formData;

    protected $formId;

    /**
     * @return string
     */
    function getEventIdentity()
    {
        return 'filledOutForm';
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return FilledOutFormMessage
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     *
     * @return FilledOutFormMessage
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return FilledOutFormMessage
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getFormName()
    {
        return $this->formName;
    }

    /**
     * @param string $formName
     *
     * @return FilledOutFormMessage
     */
    public function setFormName($formName)
    {
        $this->formName = $formName;

        return $this;
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
     *
     * @return FilledOutFormMessage
     */
    public function setFormData($formData)
    {
        $this->formData = $formData;

        return $this;
    }

    /**
     * @return int
     */
    public function getFormId()
    {
        return $this->formId;
    }

    /**
     * @param int $formId
     *
     * @return FilledOutFormMessage
     */
    public function setFormId($formId)
    {
        $this->formId = $formId;

        return $this;
    }

    /**
     * @return bool
     */
    public function isValid()
    {
        if (!$this->email && !$this->phone) {
            return false;
        }

        return !$this->hasEmpty([
            $this->formName
        ]);
    }

}