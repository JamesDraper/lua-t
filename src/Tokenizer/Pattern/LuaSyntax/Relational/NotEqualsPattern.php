<?php
declare(strict_types=1);

namespace LuaT\Tokenizer\Pattern\LuaSyntax\Relational;

use LuaT\Tokenizer\Pattern\SimplePattern;

class NotEqualsPattern extends SimplePattern
{
    public function __construct()
    {
        parent::__construct('~=');
    }
}
