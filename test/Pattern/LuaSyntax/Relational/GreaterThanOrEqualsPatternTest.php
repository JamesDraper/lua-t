<?php
declare(strict_types=1);

namespace Test\Pattern\LuaSyntax\Relational;

use LuaT\Pattern\LuaSyntax\Relational\GreaterThanOrEqualsPattern;

use Test\Pattern\PatternTestCase;

class GreaterThanOrEqualsPatternTest extends PatternTestCase
{
    public function getPatternClass(): string
    {
        return GreaterThanOrEqualsPattern::class;
    }

    public function providerMatchingSequences(): array
    {
        return [
            ['a>=a', '>='],
        ];
    }

    public function providerNonMatchingSequences(): array
    {
        return [
            ['aa'],
        ];
    }
}
