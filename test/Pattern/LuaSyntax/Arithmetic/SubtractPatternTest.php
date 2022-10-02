<?php
declare(strict_types=1);

namespace Test\Pattern\LuaSyntax\Arithmetic;

use LuaT\Pattern\LuaSyntax\Arithmetic\SubtractPattern;

use Test\Pattern\PatternTestCase;

class SubtractPatternTest extends PatternTestCase
{
    public function getPatternClass(): string
    {
        return SubtractPattern::class;
    }

    public function providerMatchingSequences(): array
    {
        return [
            ['a-a', '-'],
        ];
    }

    public function providerNonMatchingSequences(): array
    {
        return [
            ['aa'],
        ];
    }
}
