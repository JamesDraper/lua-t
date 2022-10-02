<?php
declare(strict_types=1);

namespace Test\Pattern\LuaSyntax\Logical;

use LuaT\Pattern\LuaSyntax\Logical\AndPattern;

use Test\Pattern\PatternTestCase;

class AndPatternTest extends PatternTestCase
{
    public function getPatternClass(): string
    {
        return AndPattern::class;
    }

    public function providerMatchingSequences(): array
    {
        return [
            ['and', 'and'],
            ['.and', 'and'],
            ['and.', 'and'],
            ['.and.', 'and'],
        ];
    }

    public function providerNonMatchingSequences(): array
    {
        return [
            ['aa'],
            ['anda'],
            ['aand'],
            ['aanda'],
        ];
    }
}
