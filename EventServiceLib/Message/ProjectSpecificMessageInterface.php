<?php

namespace EventServiceLib\Message;


interface ProjectSpecificMessageInterface
{
    /**
     * @return mixed
     */
    public function getProjectIdentity();

    /**
     * @return mixed
     */
    public function getProjectPossession();
}