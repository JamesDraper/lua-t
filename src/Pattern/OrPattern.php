<?php
declare(strict_types=1);

namespace LuaT\Pattern;

use function array_merge;
use function array_map;
use function implode;

class OrPattern extends NonCapturingGroupPattern
{
    public function __construct(string|Pattern $pattern1, string|Pattern $pattern2, string|Pattern ...$additional)
    {
        $patterns = array_merge([$pattern1], [$pattern2], $additional);

        $nonCapturingGroups = array_map(
            fn ($pattern) => new NonCapturingGroupPattern($pattern),
            $patterns
        );

        parent::__construct(implode('|', $nonCapturingGroups));
    }
}
