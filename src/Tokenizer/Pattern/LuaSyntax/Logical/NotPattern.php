<?php
declare(strict_types=1);

namespace LuaT\Tokenizer\Pattern\LuaSyntax\Logical;

use LuaT\Tokenizer\Pattern\WholeWordPattern;

class NotPattern extends WholeWordPattern
{
    public function __construct()
    {
        parent::__construct('not');
    }
}
