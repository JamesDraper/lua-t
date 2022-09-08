<?php
declare(strict_types=1);

namespace Test\Pattern\LuaSyntax;

use LuaT\Pattern\LuaSyntax\IfPattern;
use Test\Pattern\PatternTestCase;

class IfPatternTest extends PatternTestCase
{
    public function getPatternClass(): string
    {
        return IfPattern::class;
    }

    public function providerMatchingSequences(): array
    {
        return [
            ['if', 'if'],
            ['.if', 'if'],
            ['if.', 'if'],
            ['.if.', 'if'],
        ];
    }

    public function providerNonMatchingSequences(): array
    {
        return [
            ['aa'],
            ['ifa'],
            ['aif'],
            ['aifa'],
        ];
    }
}
