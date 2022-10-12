<?php
declare(strict_types=1);

namespace Test\Tokenizer\Pattern\LuaSyntax;

use LuaT\Tokenizer\Pattern\LuaSyntax\ConcatenatePattern;

use Test\Tokenizer\Pattern\TestCase;

class ConcatenateTest extends TestCase
{
    public function getPatternClass(): string
    {
        return ConcatenatePattern::class;
    }

    public function providerMatchingSequences(): array
    {
        return [
            ['a..a', '..'],
        ];
    }

    public function providerNonMatchingSequences(): array
    {
        return [
            ['aa'],
        ];
    }
}
