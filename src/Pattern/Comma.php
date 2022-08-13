<?php
declare(strict_types=1);

namespace LuaT\Pattern;

class Comma implements Pattern
{
    public function __toString(): string
    {
        return ',';
    }
}
