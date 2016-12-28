<?php

namespace EventServiceLib\Message\Ppc;


use EventServiceLib\Message\AbstractMessage;
use EventServiceLib\Message\ProjectSpecificMessageInterface;

abstract class AbstractPpcMessage extends AbstractMessage implements ProjectSpecificMessageInterface
{
    public function getProjectIdentity()
    {
        return 'ppc.world';
    }

    public function getProjectPossession()
    {
        return 'Ppc';
    }
}