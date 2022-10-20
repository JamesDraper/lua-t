<?php
declare(strict_types=1);

namespace Test\Unit\Tokenizer\Pattern\LuaSyntax\Arithmetic;

use LuaT\Tokenizer\Pattern\LuaSyntax\Arithmetic\SubtractPattern;

use Test\Unit\Tokenizer\Pattern\TestCase;

class SubtractTest extends TestCase
{
    public function getPatternClass(): string
    {
        return SubtractPattern::class;
    }

    public function providerMatchingSequences(): array
    {
        return [
            ['a-a', '-'],
        ];
    }

    public function providerNonMatchingSequences(): array
    {
        return [
            ['aa'],
        ];
    }
}
