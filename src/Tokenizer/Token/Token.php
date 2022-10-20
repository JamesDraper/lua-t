<?php
declare(strict_types=1);

namespace LuaT\Tokenizer\Token;

use LuaT\Tokenizer\Pattern\Pattern;

abstract class Token
{
    private Pattern $pattern;

    private int $priority;

    private int $index;

    public function __construct(int $priority, int $index, Pattern $pattern)
    {
        $this->priority = $priority;
        $this->pattern = $pattern;
        $this->index = $index;
    }

    public function getPattern(): Pattern
    {
        return $this->pattern;
    }

    public function getPriority(): int
    {
        return $this->priority;
    }

    public function getIndex(): int
    {
        return $this->index;
    }
}
