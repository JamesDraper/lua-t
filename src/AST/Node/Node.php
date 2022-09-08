<?php
declare(strict_types=1);

namespace LuaT\AST\Node;

abstract class Node
{
    private int $line;

    public function __construct(int $line)
    {
        $this->line = $line;
    }

    public function getLine(): int
    {
        return $this->line;
    }
}
