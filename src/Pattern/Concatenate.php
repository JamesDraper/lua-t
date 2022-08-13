<?php
declare(strict_types=1);

namespace LuaT\Pattern;

class Concatenate implements Pattern
{
    public function __toString(): string
    {
        return "\\.\\.";
    }
}
