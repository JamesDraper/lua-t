<?php
declare(strict_types=1);

namespace Test\Unit\Tokenizer\Pattern\LuaSyntax\Relational;

use LuaT\Tokenizer\Pattern\LuaSyntax\Relational\GreaterThanPattern;

use Test\Unit\Tokenizer\Pattern\TestCase;

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
