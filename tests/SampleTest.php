<?php

//use App\Classes\TestController;
use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
    public function testToAssertTest()
    {
        $this->assertEquals(0,0,"unittestsample");
    }
//    public function testToAssertClass()
//    {
//        $app = new TestController();
//
//        $this->assertInstanceOf(TestController::class,$app,"unittestsample");
//    }
}