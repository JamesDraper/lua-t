<?php
declare(strict_types=1);

namespace LuaT\Tokenizer\Token;

class Priority
{
    public const COLON = 0;
    public const COMMA = 1;
    public const CONCATENATE = 2;
    public const DOT = 3;
    public const EQUALS = 4;

    final private function __construct()
    {
    }
}
