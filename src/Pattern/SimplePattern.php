<?php
declare(strict_types=1);

namespace LuaT\Pattern;

class SimplePattern implements Pattern
{
    private string $pattern;

    public function __construct(Pattern|string $pattern)
    {
        $this->pattern = (string) $pattern;
    }

    public function __toString(): string
    {
        return $this->pattern;
    }
}
