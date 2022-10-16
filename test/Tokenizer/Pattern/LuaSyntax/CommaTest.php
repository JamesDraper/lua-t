<?php
declare(strict_types=1);

namespace Test\Tokenizer\Pattern\LuaSyntax;

use LuaT\Tokenizer\Pattern\LuaSyntax\CommaPattern;

use Test\Tokenizer\Pattern\TestCase;

class CommaTest extends TestCase
{
    public function getPatternClass(): string
    {
        return CommaPattern::class;
    }

    public function providerMatchingSequences(): array
    {
        return [
            ['a,a', ','],
        ];
    }

    public function providerNonMatchingSequences(): array
    {
        return [
            ['aa'],
        ];
    }
}