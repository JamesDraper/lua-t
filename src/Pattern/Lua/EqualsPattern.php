<?php
declare(strict_types=1);

namespace LuaT\Pattern\Lua;

use LuaT\Pattern\NonCapturingGroupPattern;

class EqualsPattern extends NonCapturingGroupPattern
{
    public function __construct()
    {
        parent::__construct('=');
    }
}
