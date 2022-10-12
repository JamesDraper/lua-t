<?php
declare(strict_types=1);

namespace LuaT\Tokenizer\Pattern\LuaSyntax\Literal;

use LuaT\Tokenizer\Pattern\WholeWordPattern;

class NilPattern extends WholeWordPattern
{
    public function __construct()
    {
        parent::__construct('nil');
    }
}
