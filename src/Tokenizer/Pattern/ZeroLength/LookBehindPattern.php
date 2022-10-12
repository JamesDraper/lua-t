<?php
declare(strict_types=1);

namespace LuaT\Tokenizer\Pattern\ZeroLength;

use LuaT\Tokenizer\Pattern\SimplePattern;
use LuaT\Tokenizer\Pattern\Pattern;

use function sprintf;

class LookBehindPattern extends SimplePattern
{
    public function __construct(string|Pattern $pattern)
    {
        $pattern = sprintf('(?<=%s)', (string) $pattern);

        parent::__construct($pattern);
    }
}
