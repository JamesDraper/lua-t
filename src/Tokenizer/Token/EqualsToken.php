<?php
declare(strict_types=1);

namespace LuaT\Tokenizer\Token;

use LuaT\Tokenizer\Pattern\LuaSyntax\AssignPattern;
use LuaT\Token\Index;

class EqualsToken extends SimpleToken
{
    public function __construct()
    {
        parent::__construct(Priority::EQUALS, Index::EQUALS, new AssignPattern);
    }
}
