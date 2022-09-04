<?php
declare(strict_types=1);

namespace Test\Pattern\LuaSyntax;

use LuaT\Pattern\LuaSyntax\ConcatenatePattern;

use Test\Pattern\PatternTestCase;

class ConcatenatePatternTest extends PatternTestCase
{
    public function getPatternClass(): string
    {
        return ConcatenatePattern::class;
    }

    public function providerMatchingSequences(): array
    {
        return [
            ['a..a', '..'],
        ];
    }

    public function providerNonMatchingSequences(): array
    {
        return [
            ['aa'],
        ];
    }
}
