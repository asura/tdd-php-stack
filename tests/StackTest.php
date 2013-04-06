<?php
require_once(dirname(__FILE__) . "/../src/stack.php");

class StackTest extends PHPUnit_Framework_TestCase {
    public function testCreate() {
        $stack = new Stack();
        $this->assertTrue($stack->isEmpty());
    }
}
