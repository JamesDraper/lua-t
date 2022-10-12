<?php
declare(strict_types=1);

namespace Test\Tokenizer\Pattern\LuaSyntax\Literal\Boolean;

use LuaT\Tokenizer\Pattern\LuaSyntax\Literal\Boolean\FalsePattern;

use Test\Tokenizer\Pattern\TestCase;

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
