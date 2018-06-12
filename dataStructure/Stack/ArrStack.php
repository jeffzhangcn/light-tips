<?php
namespace DataStructure\Stack;

class ArrStack implements StackInterface
{
    private $stack;
    private $limit;

    public function __construct(int $limit = 20)
    {
        $this->limit = $limit;
        $this->stack = [];
    }

    public function push(string $data = null)
    {
        if (count($this->stack) < $this->limit) {
            array_push($this->stack, $data);
        }
    }

    public function pop()
    {
        if ($this->isEmpty()) {
            throw new \UnderflowException('stack is empty');
        } else {
            array_pop($this->stack);
        }
    }

    public function isEmpty()
    {
        return empty($this->stack);
    }

    public function top()
    {
        return end($this->stack);
    }
}