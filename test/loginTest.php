<?php
// loginTest
include_once("Login.php");
class LoginTest extends \PHPUnit_Framework_TestCase {
    public function testDivideByPositiveNumber() {
        $loginMock=$this->getMock('\Login',array('getNumberFromUserInput'));
        $loginMock->expects($this->once())
            ->method('getNumberFromUserInput')
            ->will($this->returnValue(10));
        $this->assertEquals(5,$loginMock->divideBy(2));
    }
    public function testDivideByZero() {
        $loginMock=$this->getMock('\Login',array('getNumberFromUserInput'));
        $LoginMock->expects($this->never())
            ->method('getNumberFromUserInput')
            ->will($this->returnValue(10));
        $this->assertEquals(NAN, $LoginMock->divideBy(0));
    }
    public function testDivideByNegativeNumber() {
        $LoginMock=$this->getMock('\Login',array('getNumberFromUserInput'));
        $LoginMock->expects($this->once())
            ->method('getNumberFromUserInput')
            ->will($this->returnValue(10));
        $this->assertEquals(-2,$loginMock->divideBy(-5));
    }
    public function testDivideByPositiveNumberAndPrint() {
        $loginMock=$this->getMock('\Login',array('getNumberFromUserInput', 'printToScreen'));
        $loginMock->expects($this->once())
            ->method('getNumberFromUserInput')
            ->will($this->returnValue(10));
        $loginMock->expects($this->once())
            ->method('printToScreen')
            ->with($this->equalTo('5'));
        $loginMock->divideByAndPrint(2);
    }
}