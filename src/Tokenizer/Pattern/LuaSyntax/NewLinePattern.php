<?php
declare(strict_types=1);

namespace LuaT\Tokenizer\Pattern\LuaSyntax;

use LuaT\Tokenizer\Pattern\OrPattern;
use LuaT\Tokenizer\NewLine;

class NewLinePattern extends OrPattern
{
    public function __construct()
    {
        parent::__construct(...NewLine::CHARS);
    }
}
