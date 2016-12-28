<?php

namespace EventServiceLib\Message\Ppc;


use EventServiceLib\Message\AbstractMessage;

abstract class AbstractPpcMessage extends AbstractMessage  implements ProjectSpecificMessageInterface
{
    public function getProjectIdentity()
    {
        return 'ppc.world';
    }

    public function getEventDirectory()
    {
        return 'Ppc';
    }
}