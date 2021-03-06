<?php

namespace Yoye\Broker\Event;

use Symfony\Component\EventDispatcher\Event;

class MessageEvent extends Event
{
    /**
     * @var string
     */
    private $channel;

    /**
     * @var string
     */
    private $message;

    /**
     * @var boolean
     */
    private $done;

    public function __construct($channel, $message)
    {
        $this->channel = $channel;
        $this->message = $message;
        $this->done    = false;
    }

    public function getChannel()
    {
        return $this->channel;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function setDone()
    {
        $this->done = true;
    }

    public function isDone()
    {
        return $this->done;
    }
}
