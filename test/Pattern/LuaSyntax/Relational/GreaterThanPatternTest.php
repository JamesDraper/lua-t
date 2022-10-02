<?php
declare(strict_types=1);

namespace Test\Pattern\LuaSyntax\Relational;

use LuaT\Pattern\LuaSyntax\Relational\GreaterThanPattern;

use Test\Pattern\PatternTestCase;

class GreaterThanPatternTest extends PatternTestCase
{
    public function getPatternClass(): string
    {
        return GreaterThanPattern::class;
    }

    public function providerMatchingSequences(): array
    {
        return [
            ['a>a', '>'],
        ];
    }

    public function providerNonMatchingSequences(): array
    {
        return [
            ['aa'],
        ];
    }
}
