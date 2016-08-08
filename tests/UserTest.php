<?php


namespace Test;


use EventServiceLib\User;

class UserTest extends \PHPUnit_Framework_TestCase
{

    public function testMethodToArrayGivesOnlySetVariables()
    {
        $user = new User('Name', 'name@email.ru');
        $usersVariables = $user->toArray();
        foreach ($usersVariables as $key => $value) {
            $isNull = $value === null;
            $this->assertFalse($isNull);
        }
    }

}
