<?php
declare(strict_types=1);

namespace Test\Pattern\LuaSyntax\Relational;

use LuaT\Pattern\LuaSyntax\Relational\LessThanPattern;

use Test\Pattern\PatternTestCase;

class LessThanPatternTest extends PatternTestCase
{
    public function getPatternClass(): string
    {
        return LessThanPattern::class;
    }

    public function providerMatchingSequences(): array
    {
        return [
            ['a<a', '<'],
        ];
    }

    public function providerNonMatchingSequences(): array
    {
        return [
            ['aa'],
        ];
    }
}
