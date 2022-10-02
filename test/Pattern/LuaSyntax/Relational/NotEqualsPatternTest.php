<?php
declare(strict_types=1);

namespace Test\Pattern\LuaSyntax\Relational;

use LuaT\Pattern\LuaSyntax\Relational\NotEqualsPattern;

use Test\Pattern\PatternTestCase;

class NotEqualsPatternTest extends PatternTestCase
{
    public function getPatternClass(): string
    {
        return NotEqualsPattern::class;
    }

    public function providerMatchingSequences(): array
    {
        return [
            ['a~=a', '~='],
        ];
    }

    public function providerNonMatchingSequences(): array
    {
        return [
            ['aa'],
        ];
    }
}
