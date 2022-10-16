<?php
declare(strict_types=1);

namespace LuaT\Tokenizer\Token;

use LuaT\Tokenizer\Pattern\LuaSyntax\ConcatenatePattern;
use LuaT\Token\Index;

class ConcatenateToken extends Token
{
    public function __construct()
    {
        parent::__construct(Priority::CONCATENATE, Index::CONCATENATE, new ConcatenatePattern);
    }
}
