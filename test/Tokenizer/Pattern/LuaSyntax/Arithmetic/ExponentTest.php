<?php
declare(strict_types=1);

namespace Test\Tokenizer\Pattern\LuaSyntax\Arithmetic;

use LuaT\Tokenizer\Pattern\LuaSyntax\Arithmetic\ExponentPattern;

use Test\Tokenizer\Pattern\TestCase;

class ExponentTest extends TestCase
{
    public function getPatternClass(): string
    {
        return ExponentPattern::class;
    }

    public function providerMatchingSequences(): array
    {
        return [
            ['a^a', '^'],
        ];
    }

    public function providerNonMatchingSequences(): array
    {
        return [
            ['aa'],
        ];
    }
}
