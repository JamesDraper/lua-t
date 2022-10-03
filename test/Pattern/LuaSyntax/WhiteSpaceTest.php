<?php
declare(strict_types=1);

namespace Test\Pattern\LuaSyntax;

use LuaT\Pattern\LuaSyntax\WhiteSpacePattern;

use Test\Pattern\TestCase;

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
