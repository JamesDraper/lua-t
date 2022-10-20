<?php
declare(strict_types=1);

namespace Test\Unit\Tokenizer\Pattern\LuaSyntax\Relational;

use LuaT\Tokenizer\Pattern\LuaSyntax\Relational\EqualsPattern;

use Test\Unit\Tokenizer\Pattern\TestCase;

class EqualsTest extends TestCase
{
    public function getPatternClass(): string
    {
        return EqualsPattern::class;
    }

    public function providerMatchingSequences(): array
    {
        return [
            ['a==a', '=='],
        ];
    }

    public function providerNonMatchingSequences(): array
    {
        return [
            ['aa'],
        ];
    }
}
