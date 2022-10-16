<?php
declare(strict_types=1);

namespace LuaT\Tokenizer\Token;

use LuaT\Tokenizer\Pattern\LuaSyntax\DotPattern;
use LuaT\Token\Index;

class DotToken extends Token
{
    public function __construct()
    {
        parent::__construct(Priority::DOT, Index::DOT, new DotPattern);
    }
}
