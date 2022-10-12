<?php
declare(strict_types=1);

namespace LuaT\Tokenizer\Pattern\LuaSyntax\Literal\Boolean;

use LuaT\Tokenizer\Pattern\WholeWordPattern;

class FalsePattern extends WholeWordPattern
{
    public function __construct()
    {
        parent::__construct('false');
    }
}
