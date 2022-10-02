<?php
declare(strict_types=1);

namespace LuaT\Pattern\LuaSyntax\Logical;

use LuaT\Pattern\WholeWordPattern;

class NotPattern extends WholeWordPattern
{
    public function __construct()
    {
        parent::__construct('not');
    }
}
