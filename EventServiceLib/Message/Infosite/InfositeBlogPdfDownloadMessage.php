<?php

namespace EventServiceLib\Message\Infosite;

use EventServiceLib\Message\AbstractMessage;

final class InfositeBlogPdfDownloadMessage extends AbstractMessage
{
    const EVENT_IDENTITY = 'infositeBlogPdfDownload';

    private $name;
    private $email;
    private $phone;
    private $budget;
    private $locale;
    private $url;

    /**
     * @return bool
     */
    public function isValid()
    {
        return !$this->hasEmpty(
            [
                $this->locale,
                $this->email,
                $this->phone,
                $this->budget,
                $this->url
            ]
        );
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
     * @return InfositeBlogPdfDownloadMessage
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
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
     * @return InfositeBlogPdfDownloadMessage
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
     * @return InfositeBlogPdfDownloadMessage
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return string
     */
    public function getBudget()
    {
        return $this->budget;
    }

    /**
     * @param string $budget
     * @return InfositeBlogPdfDownloadMessage
     */
    public function setBudget($budget)
    {
        $this->budget = $budget;
        return $this;
    }

    /**
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @param string $locale
     * @return InfositeBlogPdfDownloadMessage
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return InfositeBlogPdfDownloadMessage
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }
}
