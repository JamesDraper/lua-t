<?php
declare(strict_types=1);

namespace LuaT\Pattern\LuaSyntax\Arithmetic;

use LuaT\Pattern\SimplePattern;

class ExponentPattern extends SimplePattern
{
    public function __construct()
    {
        parent::__construct("\\^");
    }
}