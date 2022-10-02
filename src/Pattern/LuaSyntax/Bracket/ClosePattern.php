<?php
declare(strict_types=1);

namespace LuaT\Pattern\LuaSyntax\Bracket;

use LuaT\Pattern\SimplePattern;

class ClosePattern extends SimplePattern
{
    public function __construct()
    {
        parent::__construct("\\)");
    }
}
