<?php
declare(strict_types=1);

namespace Test\Pattern\LuaSyntax;

use LuaT\Pattern\LuaSyntax\EqualsPattern;

use Test\Pattern\PatternTestCase;

class EqualsPatternTest extends PatternTestCase
{
    public function getPatternClass(): string
    {
        return EqualsPattern::class;
    }

    public function providerMatchingSequences(): array
    {
        return [
            ['a=a', '='],
        ];
    }

    public function providerNonMatchingSequences(): array
    {
        return [
            ['aa'],
        ];
    }
}
