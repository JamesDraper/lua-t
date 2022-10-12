<?php
declare(strict_types=1);

namespace LuaT\Tokenizer\Token;

use LuaT\Tokenizer\Pattern\Pattern;

abstract class Type
{
    private string $pattern;

    private int $priority;

    private int $index;

    public function __construct(int $priority, int $index, Pattern|string $pattern)
    {
        $this->pattern = (string) $pattern;
        $this->priority = $priority;
        $this->index = $index;
    }

    public function getPattern(): string
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
