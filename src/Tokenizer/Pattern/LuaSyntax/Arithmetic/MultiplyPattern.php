<?php
declare(strict_types=1);

namespace LuaT\Tokenizer\Pattern\LuaSyntax\Arithmetic;

use LuaT\Tokenizer\Pattern\SimplePattern;

class MultiplyPattern extends SimplePattern
{
    public function __construct()
    {
        parent::__construct("\\*");
    }
}
