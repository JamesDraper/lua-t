<?php
declare(strict_types=1);

namespace Test\Pattern\LuaSyntax\Relational;

use LuaT\Pattern\LuaSyntax\Relational\GreaterThanPattern;

use Test\Pattern\TestCase;

class GreaterThanTest extends TestCase
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
