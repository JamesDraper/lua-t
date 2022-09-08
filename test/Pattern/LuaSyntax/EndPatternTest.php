<?php
declare(strict_types=1);

namespace Test\Pattern\LuaSyntax;

use LuaT\Pattern\LuaSyntax\EndPattern;
use Test\Pattern\PatternTestCase;

class EndPatternTest extends PatternTestCase
{
    public function getPatternClass(): string
    {
        return EndPattern::class;
    }

    public function providerMatchingSequences(): array
    {
        return [
            ['end', 'end'],
            ['.end', 'end'],
            ['end.', 'end'],
            ['.end.', 'end'],
        ];
    }

    public function providerNonMatchingSequences(): array
    {
        return [
            ['aa'],
            ['enda'],
            ['aend'],
            ['aenda'],
        ];
    }
}
