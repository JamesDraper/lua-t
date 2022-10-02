<?php
declare(strict_types=1);

namespace LuaT\Pattern\LuaSyntax\Relational;

use LuaT\Pattern\SimplePattern;

class LessThanOrEqualsPattern extends SimplePattern
{
    public function __construct()
    {
        parent::__construct('<=');
    }
}
