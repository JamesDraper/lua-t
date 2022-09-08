<?php
declare(strict_types=1);

namespace Test\Pattern\LuaSyntax\IfStructure;

use LuaT\Pattern\LuaSyntax\IfStructure\ElsePattern;
use Test\Pattern\PatternTestCase;

class ElsePatternTest extends PatternTestCase
{
    public function getPatternClass(): string
    {
        return ElsePattern::class;
    }

    public function providerMatchingSequences(): array
    {
        return [
            ['else', 'else'],
            ['.else', 'else'],
            ['else.', 'else'],
            ['.else.', 'else'],
        ];
    }

    public function providerNonMatchingSequences(): array
    {
        return [
            ['aa'],
            ['elsea'],
            ['aelse'],
            ['aelsea'],
        ];
    }
}
