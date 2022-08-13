<?php
declare(strict_types=1);

namespace LuaT\Pattern;

use function sprintf;

class NonCapturingGroupPattern extends SimplePattern
{
    public function __construct(Pattern|string $pattern)
    {
        $pattern = (string) sprintf('(?:%s)', $pattern);

        parent::__construct($pattern);
    }
}
