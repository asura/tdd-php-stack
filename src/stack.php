<?php

class EmptyStackException extends Exception {
}

class Stack {
    private $value;
    private $size;

    public function __construct()
    {
        $this->value = array();
        $this->size = 0;
    }

    public function isEmpty()
    {
        return $this->size == 0;
    }
    public function push($value)
    {
        $this->value[$this->size] = $value;
        $this->size += 1;
    }
    public function top()
    {
        $this->emptyCheck();
        return $this->value[$this->size - 1];
    }
    public function size()
    {
        return $this->size;
    }
    public function pop()
    {
        $this->emptyCheck();
        $this->size -= 1;
    }

    private function emptyCheck()
    {
        if ($this->isEmpty()) {
            throw new EmptyStackException();
        }
    }
}
