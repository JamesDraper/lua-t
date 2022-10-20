<?php
declare(strict_types=1);

namespace Test\Unit\Tokenizer\Pattern\LuaSyntax\Relational;

use LuaT\Tokenizer\Pattern\LuaSyntax\Relational\GreaterThanOrEqualsPattern;

use Test\Unit\Tokenizer\Pattern\TestCase;

class GreaterThanOrEqualsTest extends TestCase
{
    public function getPatternClass(): string
    {
        return GreaterThanOrEqualsPattern::class;
    }

    public function providerMatchingSequences(): array
    {
        return [
            ['a>=a', '>='],
        ];
    }

    public function providerNonMatchingSequences(): array
    {
        return [
            ['aa'],
        ];
    }
}
