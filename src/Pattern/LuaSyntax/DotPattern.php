<?php
declare(strict_types=1);

namespace LuaT\Pattern\LuaSyntax;

use LuaT\Pattern\SimplePattern;

class DotPattern extends SimplePattern
{
    public function __construct()
    {
        parent::__construct("\\.");
    }
}