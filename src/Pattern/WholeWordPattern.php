<?php
declare(strict_types=1);

namespace LuaT\Pattern;

use LuaT\Pattern\ZeroLength\NegativeLookBehindPattern;
use LuaT\Pattern\ZeroLength\NegativeLookAheadPattern;

class WholeWordPattern extends SimplePattern
{
    private const WORD = '[A-Za-z0-9_]';

    public function __construct(string|Pattern $pattern)
    {
        $before = new NegativeLookBehindPattern(self::WORD);
        $after = new NegativeLookAheadPattern(self::WORD);

        parent::__construct($before . $pattern . $after);
    }
}
