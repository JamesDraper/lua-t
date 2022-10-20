<?php
declare(strict_types=1);

namespace Test\Unit\Tokenizer\Pattern\LuaSyntax;

use LuaT\Tokenizer\Pattern\LuaSyntax\NewLinePattern;

use Test\Unit\Tokenizer\Pattern\TestCase;

class NewLineTest extends TestCase
{
    public function getPatternClass(): string
    {
        return NewLinePattern::class;
    }

    public function providerMatchingSequences(): array
    {
        return [
            ["a\r\na", "\r\n"],
            ["a\na", "\n"],
            ["a\ra", "\r"],
        ];
    }

    public function providerNonMatchingSequences(): array
    {
        return [
            ['aa'],
        ];
    }
}
