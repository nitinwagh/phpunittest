<?php

use PHPUnit\Framework\TestCase;
use App\Library\User;

class FirstTest extends TestCase {

    private $user;
    private $userArr = array(
        array("name" => "Nitin Wagh", "city" => "Pune"),
        array("name" => "Ajay Kothalkar", "city" => "Aurangabad")
    );

    public function setUp()
    {
        $this->user = new User();
    }

    public function testPushAndPop()
    {
        $this->assertSame($this->userArr, $this->user->getUser());
//        $stack = [];
//        $this->assertSame(0, count($stack));
//
//        array_push($stack, 'foo');
//        $this->assertSame('foo', $stack[count($stack) - 1]);
//        $this->assertSame(1, count($stack));
//
//        $this->assertSame('foo', array_pop($stack));
//        $this->assertSame(0, count($stack));
    }

}
