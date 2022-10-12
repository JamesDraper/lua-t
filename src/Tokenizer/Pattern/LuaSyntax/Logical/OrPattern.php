<?php
declare(strict_types=1);

namespace LuaT\Tokenizer\Pattern\LuaSyntax\Logical;

use LuaT\Tokenizer\Pattern\WholeWordPattern;

class OrPattern extends WholeWordPattern
{
    public function __construct()
    {
        parent::__construct('or');
    }
}
