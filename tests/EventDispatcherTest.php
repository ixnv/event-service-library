<?php


namespace Test;


use EventServiceLib\EventDispatcher;
use EventServiceLib\Message\RegistrationMessage;
use EventServiceLib\QueueManagerInterface;

class EventDispatcherTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function testDispatchMessage()
    {
        $queueManagerInterface = \Phake::mock(QueueManagerInterface::class);
        $eventDispatcher       = new EventDispatcher($queueManagerInterface);

        $registrationMessage = new RegistrationMessage();
        $registrationMessage
            ->setEmail('name@email.ru')
            ->setElamaLogin('name@email.ru')
            ->setElamaId(120)
            ->setName('Name')
            ->setRegistrationDate(date(DATE_ISO8601));

        $eventDispatcher->dispatchMessage($registrationMessage);

        $expectedMessage = [
            'version'      => '0.2',
            'messageClass' => 'EventServiceLib\\Message\\RegistrationMessage',
            'type'         => 'registration',
            'fields'       => [
                'registration_date' => date(DATE_ISO8601),
                'elamaId'           => 120,
                'orphanFields'      => [],
                'name'              => 'Name',
                'elamaLogin'        => 'name@email.ru',
                'email'             => ['name@email.ru'],
            ],
        ];
        $expectedMessage = json_encode($expectedMessage);
        \Phake::verify($queueManagerInterface)->putMessage($expectedMessage);
    }


}


