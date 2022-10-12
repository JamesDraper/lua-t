<?php
declare(strict_types=1);

namespace LuaT\Tokenizer\Token;

use LuaT\Tokenizer\Pattern\LuaSyntax\ColonPattern;
use LuaT\Token\Index;

class ColonType extends Type
{
    public function __construct()
    {
        parent::__construct(Priority::COLON, Index::COLON, new ColonPattern);
    }
}
