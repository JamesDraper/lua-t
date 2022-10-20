<?php
declare(strict_types=1);

namespace LuaT\Tokenizer;

use LuaT\Tokenizer\Pattern\LuaSyntax\NewLinePattern;

class GetValidDelimiters
{
    public function __invoke(): array
    {
        $invalidChars = array_merge(
            array_map(fn (int $i): string => chr($i), range(0, 31)),
            ['(', ')', '[', ']', '{', '}', '<', '>', '\\', '/'],
            [' ', "\t", ...NewLinePattern::CHARS],
            range('A', 'Z'),
            range('a', 'z'),
            range(0, 9),
            [chr(127)],
        );

        $chars = array_map(
            fn (int $i): string => chr($i),
            range(0, 127)
        );

        return array_diff($chars, $invalidChars);
    }
}
