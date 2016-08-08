<?php


namespace Test;


use EventServiceLib\EventDispatcher;
use EventServiceLib\QueueManagerInterface;
use EventServiceLib\User;

class EventDispatcherTest extends \PHPUnit_Framework_TestCase
{

    public function testEventDispatcherPutsMessagesInQueueWithCorrectType()
    {
        $queueManagerInterface = \Phake::mock(QueueManagerInterface::class);
        $eventDispatcher = new EventDispatcher($queueManagerInterface);
        $user = new User('Name', 'name@email.ru');
        $user->setRegistrationDate(date(DATE_ISO8601));
        $eventDispatcher->dispatch('registration', $user);
        $expectedMessage = [
            'type' => 'registration',
            'fields' => [
                'name' => 'Name',
                'email' => 'name@email.ru',
                'registration_date' => date(DATE_ISO8601)
            ]
        ];
        $expectedMessage = json_encode($expectedMessage);
        \Phake::verify($queueManagerInterface)->putMessage($expectedMessage);
    }

}


