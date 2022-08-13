<?php
declare(strict_types=1);

namespace Test\Pattern\Lua;

use LuaT\Pattern\Lua\DotPattern;

use Test\Pattern\PatternTestCase;

class DotPatternTest extends PatternTestCase
{
    public function getPatternClass(): string
    {
        return DotPattern::class;
    }

    public function providerMatchingSequences(): array
    {
        return [
            ['a.a', '.'],
        ];
    }

    public function providerNonMatchingSequences(): array
    {
        return [
            ['aa'],
        ];
    }
}
