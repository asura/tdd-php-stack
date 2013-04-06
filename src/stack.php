<?php

class EmptyStackException extends Exception {
}

class Stack {
    private $value;
    private $size;

    public function isEmpty()
    {
        return $this->size == 0;
    }
    public function push($value)
    {
        $this->value = $value;
        $this->size += 1;
    }
    public function top()
    {
        $this->emptyCheck();
        return $this->value;
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
