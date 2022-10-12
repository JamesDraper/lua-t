<?php
declare(strict_types=1);

namespace LuaT\Tokenizer\Pattern\LuaSyntax;

use LuaT\Tokenizer\Pattern\OrPattern;

class NewLinePattern extends OrPattern
{
    private const CHARS = ["\r\n", "\n", "\r"];

    public function __construct()
    {
        parent::__construct(...self::CHARS);
    }
}
