<?php
declare(strict_types=1);

namespace LuaT\Pattern\LuaSyntax\Comparison;

use LuaT\Pattern\SimplePattern;

class EqualsPattern extends SimplePattern
{
    public function __construct()
    {
        parent::__construct('==');
    }
}
