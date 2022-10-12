<?php
declare(strict_types=1);

namespace Test\Tokenizer\Pattern\LuaSyntax\Arithmetic;

use LuaT\Tokenizer\Pattern\LuaSyntax\Arithmetic\MultiplyPattern;

use Test\Tokenizer\Pattern\TestCase;

class MultiplyTest extends TestCase
{
    public function getPatternClass(): string
    {
        return MultiplyPattern::class;
    }

    public function providerMatchingSequences(): array
    {
        return [
            ['a*a', '*'],
        ];
    }

    public function providerNonMatchingSequences(): array
    {
        return [
            ['aa'],
        ];
    }
}
