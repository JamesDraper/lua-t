<?php
declare(strict_types=1);

namespace LuaT\Pattern\LuaSyntax\Literal\Boolean;

use LuaT\Pattern\WholeWordPattern;

class FalsePattern extends WholeWordPattern
{
    public function __construct()
    {
        parent::__construct('false');
    }
}
