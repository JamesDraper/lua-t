<?php
declare(strict_types=1);

namespace LuaT\Pattern;

use function array_merge;
use function implode;

class OrPattern extends SimplePattern
{
    public function __construct(string|Pattern $pattern1, string|Pattern $pattern2, string|Pattern ...$additional)
    {
        $patterns = array_merge([$pattern1], [$pattern2], $additional);

        parent::__construct(implode('|', $patterns));
    }
}
