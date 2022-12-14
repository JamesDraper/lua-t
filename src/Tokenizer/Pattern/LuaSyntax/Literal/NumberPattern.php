<?php
declare(strict_types=1);

namespace LuaT\Tokenizer\Pattern\LuaSyntax\Literal;

use LuaT\Tokenizer\Pattern\Group\NonCapturingPattern;
use LuaT\Tokenizer\Pattern\SimplePattern;

class NumberPattern extends SimplePattern
{
    private const NEGATIVE = '\\-?';

    private const WHOLE_PART = '[0-9]+';

    private const DECIMAL_PART = '\\.[0-9]+';

    public function __construct()
    {
        $decimal = new NonCapturingPattern(static::DECIMAL_PART);

        parent::__construct(static::NEGATIVE . static::WHOLE_PART . $decimal . '?');
    }
}
