<?php
declare(strict_types=1);

namespace LuaT\Tokenizer\Token;

use LuaT\Tokenizer\Pattern\Pattern;

interface Token
{
    public function getPattern(): Pattern;

    public function getPriority(): int;

    public function getIndex(): int;
}
