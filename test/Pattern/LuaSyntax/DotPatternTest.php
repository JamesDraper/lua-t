<?php
declare(strict_types=1);

namespace Test\Pattern\LuaSyntax;

use LuaT\Pattern\LuaSyntax\DotPattern;

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