<?php
declare(strict_types=1);

namespace Test\Pattern;

use LuaT\Pattern\NewLinePattern;

class NewLinePatternTest extends PatternTestCase
{
    public function getPatternClass(): string
    {
        return NewLinePattern::class;
    }

    public function providerMatchingSequences(): array
    {
        return [
            ["a\r\na", "\r\n"],
            ["a\na", "\n"],
            ["a\ra", "\r"],
        ];
    }

    public function providerNonMatchingSequences(): array
    {
        return [
            ['aa'],
        ];
    }
}
