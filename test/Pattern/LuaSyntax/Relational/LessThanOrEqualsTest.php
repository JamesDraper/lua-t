<?php
declare(strict_types=1);

namespace Test\Pattern\LuaSyntax\Relational;

use LuaT\Pattern\LuaSyntax\Relational\LessThanOrEqualsPattern;

use Test\Pattern\TestCase;

class LessThanOrEqualsTest extends TestCase
{
    public function getPatternClass(): string
    {
        return LessThanOrEqualsPattern::class;
    }

    public function providerMatchingSequences(): array
    {
        return [
            ['a<=a', '<='],
        ];
    }

    public function providerNonMatchingSequences(): array
    {
        return [
            ['aa'],
        ];
    }
}
