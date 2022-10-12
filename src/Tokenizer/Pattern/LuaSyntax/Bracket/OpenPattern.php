<?php
declare(strict_types=1);

namespace LuaT\Tokenizer\Pattern\LuaSyntax\Bracket;

use LuaT\Tokenizer\Pattern\SimplePattern;

class OpenPattern extends SimplePattern
{
    public function __construct()
    {
        parent::__construct("\\(");
    }
}
