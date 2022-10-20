<?php
declare(strict_types=1);

namespace Test\Unit\Tokenizer\Pattern\LuaSyntax\Arithmetic;

use LuaT\Tokenizer\Pattern\LuaSyntax\Arithmetic\AddPattern;

use Test\Unit\Tokenizer\Pattern\TestCase;

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
