<?php

class Stack {
    private $value;

    public function isEmpty()
    {
        return true;
    }
    public function push($value)
    {
        $this->value = $value;
    }
    public function top()
    {
        return $this->value;
    }
}
