<?php
declare(strict_types=1);

namespace LuaT\Pattern\LuaSyntax\IfStructure;

use LuaT\Pattern\WholeWordPattern;

class ElseIfPattern extends WholeWordPattern
{
    public function __construct()
    {
        parent::__construct('elseif');
    }
}
