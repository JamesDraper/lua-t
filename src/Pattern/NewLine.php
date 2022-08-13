<?php
declare(strict_types=1);

namespace LuaT\Pattern;

use function implode;

class NewLine implements Pattern
{
    private const CHARS = ["\r\n", "\n", "\r"];

    private string $pattern;

    public function __construct()
    {
        $this->pattern = implode('|', self::CHARS);
    }

    public function __toString(): string
    {
        return $this->pattern;
    }
}
