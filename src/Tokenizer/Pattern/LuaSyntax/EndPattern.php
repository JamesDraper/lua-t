<?php
declare(strict_types=1);

namespace LuaT\Tokenizer\Pattern\LuaSyntax;

use LuaT\Tokenizer\Pattern\WholeWordPattern;

class EndPattern extends WholeWordPattern
{
    public function __construct()
    {
        parent::__construct('end');
    }
}
