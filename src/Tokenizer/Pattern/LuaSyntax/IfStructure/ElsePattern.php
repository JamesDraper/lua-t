<?php
declare(strict_types=1);

namespace LuaT\Tokenizer\Pattern\LuaSyntax\IfStructure;

use LuaT\Tokenizer\Pattern\WholeWordPattern;

class ElsePattern extends WholeWordPattern
{
    public function __construct()
    {
        parent::__construct('else');
    }
}
