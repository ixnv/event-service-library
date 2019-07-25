<?php


namespace Test;


use EventServiceLib\EventDispatcher;
use EventServiceLib\Message\RegistrationMessage;
use EventServiceLib\QueueManagerInterface;
use PHPUnit\Framework\TestCase;

class EventDispatcherTest extends TestCase
{

    public function testDispatchMessage()
    {
        $queueManagerInterface = \Phake::mock(QueueManagerInterface::class);
        \Phake::when($queueManagerInterface)->connectionIsAvailable->thenReturn(true);
        $eventDispatcher = new EventDispatcher($queueManagerInterface);

        $registrationMessage = new RegistrationMessage();
        $registrationMessage
            ->setEmail('name@email.ru')
            ->setElamaLogin('name@email.ru')
            ->setElamaId(120)
            ->setName('Name')
            ->setRegistrationDate(date(DATE_ISO8601))
            ->setReferralLink('a54784f37527d4b7480cdd8d503c80bf');

        $eventDispatcher->dispatchMessage($registrationMessage);

        $expectedMessage = [
            'version'      => '0.3',
            'messageClass' => 'EventServiceLib\\Message\\RegistrationMessage',
            'type'         => 'registration',
            'fields'       => [
                'registration_date' => date(DATE_ISO8601),
                'elamaId'           => 120,
                'referralLink'      => 'a54784f37527d4b7480cdd8d503c80bf',
                'orphanFields'      => [],
                'messageUniqId'     => '',
                'name'              => 'Name',
                'elamaLogin'        => 'name@email.ru',
                'email'             => ['name@email.ru'],
            ],
        ];
        $expectedMessage = json_encode($expectedMessage);
        \Phake::verify($queueManagerInterface)->putMessage($expectedMessage);
    }


}


