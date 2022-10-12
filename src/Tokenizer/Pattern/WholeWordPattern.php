<?php
declare(strict_types=1);

namespace LuaT\Tokenizer\Pattern;

use LuaT\Tokenizer\Pattern\ZeroLength\NegativeLookBehindPattern;
use LuaT\Tokenizer\Pattern\ZeroLength\NegativeLookAheadPattern;

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
