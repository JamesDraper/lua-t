<?php
declare(strict_types=1);

namespace Test\Pattern\LuaSyntax;

use LuaT\Pattern\LuaSyntax\ElseIfPattern;
use Test\Pattern\PatternTestCase;

class ElseIfPatternTest extends PatternTestCase
{
    public function getPatternClass(): string
    {
        return ElseIfPattern::class;
    }

    public function providerMatchingSequences(): array
    {
        return [
            ['elseif', 'elseif'],
            ['.elseif', 'elseif'],
            ['elseif.', 'elseif'],
            ['.elseif.', 'elseif'],
        ];
    }

    public function providerNonMatchingSequences(): array
    {
        return [
            ['aa'],
            ['elseifa'],
            ['aelseif'],
            ['aelseifa'],
        ];
    }
}
