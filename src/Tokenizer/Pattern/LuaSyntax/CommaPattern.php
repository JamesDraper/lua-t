<?php
declare(strict_types=1);

namespace LuaT\Tokenizer\Pattern\LuaSyntax;

use LuaT\Tokenizer\Pattern\SimplePattern;

class CommaPattern extends SimplePattern
{
    public function __construct()
    {
        parent::__construct(',');
    }
}
