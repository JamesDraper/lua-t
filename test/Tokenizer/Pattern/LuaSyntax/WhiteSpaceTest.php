<?php
declare(strict_types=1);

namespace Test\Tokenizer\Pattern\LuaSyntax;

use LuaT\Tokenizer\Pattern\LuaSyntax\WhiteSpacePattern;

use Test\Tokenizer\Pattern\TestCase;

class WhiteSpaceTest extends TestCase
{
    public function getPatternClass(): string
    {
        return WhiteSpacePattern::class;
    }

    public function providerMatchingSequences(): array
    {
        return [
            [' ', ' '],
            ['. ', ' '],
            [' .', ' '],
            ['. .', ' '],
            ['  ', '  '],
            ['.  ', '  '],
            ['  .', '  '],
            ['.  .', '  '],
            ["\t", "\t"],
            [".\t", "\t"],
            ["\t.", "\t"],
            [".\t.", "\t"],
            ["\t\t", "\t\t"],
            [".\t\t", "\t\t"],
            ["\t\t.", "\t\t"],
            [".\t\t.", "\t\t"],
            ["\t ", "\t "],
            [".\t ", "\t "],
            ["\t .", "\t "],
            [".\t .", "\t "],
        ];
    }

    public function providerNonMatchingSequences(): array
    {
        return [
            ['aa'],
        ];
    }
}
