<?php
declare(strict_types=1);

namespace Test\Pattern\LuaSyntax\IfStructure;

use LuaT\Pattern\LuaSyntax\IfStructure\IfPattern;
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
