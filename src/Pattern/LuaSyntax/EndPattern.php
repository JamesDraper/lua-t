<?php
declare(strict_types=1);

namespace LuaT\Pattern\LuaSyntax;

use LuaT\Pattern\WholeWordPattern;

class EndPattern extends WholeWordPattern
{
    public function __construct()
    {
        parent::__construct('end');
    }
}
