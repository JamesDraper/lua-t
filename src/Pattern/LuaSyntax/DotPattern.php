<?php
declare(strict_types=1);

namespace LuaT\Pattern\LuaSyntax;

use LuaT\Pattern\NonCapturingGroupPattern;

class DotPattern extends NonCapturingGroupPattern
{
    public function __construct()
    {
        parent::__construct("\\.");
    }
}
