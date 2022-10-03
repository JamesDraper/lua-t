<?php
declare(strict_types=1);

namespace Test\Pattern\LuaSyntax\Literal\Boolean;

use LuaT\Pattern\LuaSyntax\Literal\Boolean\FalsePattern;

use Test\Pattern\TestCase;

class FalseTest extends TestCase
{
    public function getPatternClass(): string
    {
        return FalsePattern::class;
    }

    public function providerMatchingSequences(): array
    {
        return [
            ['false', 'false'],
            ['.false', 'false'],
            ['false.', 'false'],
            ['.false.', 'false'],
        ];
    }

    public function providerNonMatchingSequences(): array
    {
        return [
            ['aa'],
            ['falsea'],
            ['afalse'],
            ['afalsea'],
        ];
    }
}
