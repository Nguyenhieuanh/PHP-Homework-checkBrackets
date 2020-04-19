<?php


class Stack
{
    protected $stack;
    protected $limit;

    public function __construct($limit = null)
    {
        $this->stack = [];
        $this->limit = $limit;
    }

    public function push($item)
    {
        if ($this->limit === null) {
            array_push($this->stack, $item);
        } elseif (is_numeric($this->limit)) {
            if (count($this->stack) < $this->limit) {
                array_push($this->stack, $item);
            } else {
                throw new RuntimeException('Full Stack!');
            }
        }
    }

    public function pop()
    {
        return array_pop($this->stack);
    }

    public function isEmpty()
    {
        return empty($this->stack);
    }
}