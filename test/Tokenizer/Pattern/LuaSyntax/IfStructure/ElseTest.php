<?php
declare(strict_types=1);

namespace Test\Tokenizer\Pattern\LuaSyntax\IfStructure;

use LuaT\Tokenizer\Pattern\LuaSyntax\IfStructure\ElsePattern;

use Test\Tokenizer\Pattern\TestCase;

class ElseTest extends TestCase
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
