<?php
declare(strict_types=1);

namespace Test\Unit\Tokenizer\Pattern\LuaSyntax\Logical;

use LuaT\Tokenizer\Pattern\LuaSyntax\Logical\AndPattern;

use Test\Unit\Tokenizer\Pattern\TestCase;

class AndTest extends TestCase
{
    public function getPatternClass(): string
    {
        return AndPattern::class;
    }

    public function providerMatchingSequences(): array
    {
        return [
            ['and', 'and'],
            ['.and', 'and'],
            ['and.', 'and'],
            ['.and.', 'and'],
        ];
    }

    public function providerNonMatchingSequences(): array
    {
        return [
            ['aa'],
            ['anda'],
            ['aand'],
            ['aanda'],
        ];
    }
}
