<?php
declare(strict_types=1);

namespace LuaT\Pattern\ZeroLength;

use LuaT\Pattern\SimplePattern;
use LuaT\Pattern\Pattern;

use function sprintf;

class LookBehindPattern extends SimplePattern
{
    public function __construct(string|Pattern $pattern)
    {
        $pattern = (string) sprintf('(?<=%s)', $pattern);

        parent::__construct($pattern);
    }
}
