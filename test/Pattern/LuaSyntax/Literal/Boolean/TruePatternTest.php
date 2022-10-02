<?php
declare(strict_types=1);

namespace Test\Pattern\LuaSyntax\Literal\Boolean;

use LuaT\Pattern\LuaSyntax\Literal\Boolean\TruePattern;

use Test\Pattern\PatternTestCase;

class TruePatternTest extends PatternTestCase
{
    public function getPatternClass(): string
    {
        return TruePattern::class;
    }

    public function providerMatchingSequences(): array
    {
        return [
            ['true', 'true'],
            ['.true', 'true'],
            ['true.', 'true'],
            ['.true.', 'true'],
        ];
    }

    public function providerNonMatchingSequences(): array
    {
        return [
            ['aa'],
            ['truea'],
            ['atrue'],
            ['atruea'],
        ];
    }
}
