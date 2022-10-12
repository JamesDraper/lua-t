<?php
declare(strict_types=1);

namespace Test\Tokenizer\Pattern\LuaSyntax\Relational;

use LuaT\Tokenizer\Pattern\LuaSyntax\Relational\LessThanOrEqualsPattern;

use Test\Tokenizer\Pattern\TestCase;

class LessThanOrEqualsTest extends TestCase
{
    public function getPatternClass(): string
    {
        return LessThanOrEqualsPattern::class;
    }

    public function providerMatchingSequences(): array
    {
        return [
            ['a<=a', '<='],
        ];
    }

    public function providerNonMatchingSequences(): array
    {
        return [
            ['aa'],
        ];
    }
}
