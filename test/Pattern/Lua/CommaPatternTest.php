<?php
declare(strict_types=1);

namespace Test\Pattern\Lua;

use LuaT\Pattern\Lua\CommaPattern;

use Test\Pattern\PatternTestCase;

class CommaPatternTest extends PatternTestCase
{
    public function getPatternClass(): string
    {
        return CommaPattern::class;
    }

    public function providerMatchingSequences(): array
    {
        return [
            ['a,a', ','],
        ];
    }

    public function providerNonMatchingSequences(): array
    {
        return [
            ['aa'],
        ];
    }
}
