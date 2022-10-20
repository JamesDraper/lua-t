<?php
declare(strict_types=1);

namespace Test\Unit\Tokenizer\Pattern\LuaSyntax\Bracket;

use LuaT\Tokenizer\Pattern\LuaSyntax\Bracket\ClosePattern;

use Test\Unit\Tokenizer\Pattern\TestCase;

class CloseTest extends TestCase
{
    public function getPatternClass(): string
    {
        return ClosePattern::class;
    }

    public function providerMatchingSequences(): array
    {
        return [
            ['a)a', ')'],
        ];
    }

    public function providerNonMatchingSequences(): array
    {
        return [
            ['aa'],
        ];
    }
}
