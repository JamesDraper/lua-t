<?php
declare(strict_types=1);

namespace LuaT\Tokenizer\Token;

use LuaT\Tokenizer\Pattern\LuaSyntax\CommaPattern;
use LuaT\Token\Index;

class CommaToken extends SimpleToken
{
    public function __construct()
    {
        parent::__construct(Priority::COMMA, Index::COMMA, new CommaPattern);
    }
}
