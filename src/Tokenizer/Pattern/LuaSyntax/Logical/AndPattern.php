<?php
declare(strict_types=1);

namespace LuaT\Tokenizer\Pattern\LuaSyntax\Logical;

use LuaT\Tokenizer\Pattern\WholeWordPattern;

class AndPattern extends WholeWordPattern
{
    public function __construct()
    {
        parent::__construct('and');
    }
}
