<?php

class Stack {
    private $value;
    private $size;

    public function isEmpty()
    {
        return true;
    }
    public function push($value)
    {
        $this->value = $value;
        $this->size += 1;
    }
    public function top()
    {
        return $this->value;
    }
    public function size()
    {
        return $this->size;
    }
}
