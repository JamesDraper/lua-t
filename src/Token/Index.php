<?php
declare(strict_types=1);

namespace LuaT\Token;

class Index
{
    public const NEW_LINE = 0;
    public const COMMA = 1;
    public const CONCATENATE = 2;
    public const EQUALS = 3;
    public const COLON = 4;

    final private function __construct()
    {
    }
}
