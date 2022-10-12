<?php
declare(strict_types=1);

namespace Test\Tokenizer\Pattern\LuaSyntax\Arithmetic;

use LuaT\Tokenizer\Pattern\LuaSyntax\Arithmetic\AddPattern;

use Test\Tokenizer\Pattern\TestCase;

class AddTest extends TestCase
{
    public function getPatternClass(): string
    {
        return AddPattern::class;
    }

    public function providerMatchingSequences(): array
    {
        return [
            ['a+a', '+'],
        ];
    }

    public function providerNonMatchingSequences(): array
    {
        return [
            ['aa'],
        ];
    }
}
