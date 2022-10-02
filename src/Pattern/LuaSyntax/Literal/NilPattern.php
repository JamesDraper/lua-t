<?php
declare(strict_types=1);

namespace LuaT\Pattern\LuaSyntax\Literal;

use LuaT\Pattern\WholeWordPattern;

class NilPattern extends WholeWordPattern
{
    public function __construct()
    {
        parent::__construct('nil');
    }
}
