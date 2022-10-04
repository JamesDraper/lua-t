<?php
declare(strict_types=1);

namespace LuaT\Pattern\Group;

use LuaT\Pattern\SimplePattern;
use LuaT\Pattern\Pattern;

use function sprintf;

class CapturingPattern extends SimplePattern
{
    public function __construct(Pattern|string $pattern)
    {
        $pattern = sprintf('(?:%s)', (string) $pattern);

        parent::__construct($pattern);
    }
}
