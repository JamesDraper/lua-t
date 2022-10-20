<?php
declare(strict_types=1);

namespace LuaT\Tokenizer\Pattern\Group;

use LuaT\Tokenizer\Pattern\SimplePattern;
use LuaT\Tokenizer\Pattern\Pattern;

use function sprintf;

class CapturingPattern extends SimplePattern
{
    public function __construct(Pattern|string $pattern)
    {
        $pattern = sprintf('(%s)', (string) $pattern);

        parent::__construct($pattern);
    }
}
