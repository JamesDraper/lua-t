<?php
declare(strict_types=1);

namespace Test\Pattern\LuaSyntax;

use LuaT\Pattern\LuaSyntax\ThenPattern;
use Test\Pattern\PatternTestCase;

class ThenPatternTest extends PatternTestCase
{
    public function getPatternClass(): string
    {
        return ThenPattern::class;
    }

    public function providerMatchingSequences(): array
    {
        return [
            ['then', 'then'],
            ['.then', 'then'],
            ['then.', 'then'],
            ['.then.', 'then'],
        ];
    }

    public function providerNonMatchingSequences(): array
    {
        return [
            ['aa'],
            ['thena'],
            ['athen'],
            ['athena'],
        ];
    }
}
