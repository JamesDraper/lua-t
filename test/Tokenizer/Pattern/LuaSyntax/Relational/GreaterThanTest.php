<?php
declare(strict_types=1);

namespace Test\Tokenizer\Pattern\LuaSyntax\Relational;

use LuaT\Tokenizer\Pattern\LuaSyntax\Relational\GreaterThanPattern;

use Test\Tokenizer\Pattern\TestCase;

class GreaterThanTest extends TestCase
{
    public function getPatternClass(): string
    {
        return GreaterThanPattern::class;
    }

    public function providerMatchingSequences(): array
    {
        return [
            ['a>a', '>'],
        ];
    }

    public function providerNonMatchingSequences(): array
    {
        return [
            ['aa'],
        ];
    }
}
