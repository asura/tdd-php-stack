<?php
require_once(dirname(__FILE__) . "/../src/stack.php");

class StackTest extends PHPUnit_Framework_TestCase {
    protected $stack;

    protected function setUp()
    {
        $this->stack = new Stack();
    }

    public function testCreate()
    {
        $this->assertTrue($this->stack->isEmpty());
    }

    public function testPushAndTop()
    {
        $this->stack->push(1);
        $this->assertEquals(1, $this->stack->top());
    }

    public function testPushAndSize()
    {
        $this->stack->push(1);
        $this->assertEquals(1, $this->stack->size());

        $this->stack->push(2);
        $this->assertEquals(2, $this->stack->size());
    }
}
