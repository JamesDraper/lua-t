<?php
declare(strict_types=1);

namespace LuaT\AST\Node;

class IfNode extends Node
{
    private Node $condition;

    private Node $pass;

    private ?Node $fail;

    public function __construct(int $line, Node $condition, Node $pass, ?Node $fail)
    {
        parent::__construct($line);

        $this->condition = $condition;
        $this->pass = $pass;
        $this->fail = $fail;
    }

    public function getCondition(): Node
    {
        return $this->condition;
    }

    public function getPass(): Node
    {
        return $this->pass;
    }

    public function getFail(): Node
    {
        return $this->fail;
    }
}
