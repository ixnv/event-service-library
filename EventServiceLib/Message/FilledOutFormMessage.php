<?php


namespace EventServiceLib\Message;



class FilledOutFormMessage extends AbstractMessage
{
    protected $email;

    protected $phone;

    protected $name;

    protected $formName;

    protected $formData; // form data ????

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
     * @return string
     */
    public function getFormData()
    {
        return $this->formData;
    }

    /**
     * @param string $formData
     *
     * @return FilledOutFormMessage
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
            $this->email,
            $this->formName
        ]);
    }

}