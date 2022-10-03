<?php
declare(strict_types=1);

namespace LuaT\Pattern\LuaSyntax\Literal;

use LuaT\Pattern\NonCapturingGroupPattern;
use LuaT\Pattern\SimplePattern;

class NumberPattern extends SimplePattern
{
    private const NEGATIVE = '\\-?';

    private const WHOLE_PART = '[0-9]+';

    private const DECIMAL_PART = '\\.[0-9]+';

    public function __construct()
    {
        $decimal = new NonCapturingGroupPattern(static::DECIMAL_PART);

        parent::__construct(static::NEGATIVE . static::WHOLE_PART . $decimal . '?');
    }
}
