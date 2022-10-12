<?php
declare(strict_types=1);

namespace Test\Tokenizer\Pattern\LuaSyntax\Relational;

use LuaT\Tokenizer\Pattern\LuaSyntax\Relational\NotEqualsPattern;

use Test\Tokenizer\Pattern\TestCase;

class NotEqualsTest extends TestCase
{
    public function getPatternClass(): string
    {
        return NotEqualsPattern::class;
    }

    public function providerMatchingSequences(): array
    {
        return [
            ['a~=a', '~='],
        ];
    }

    public function providerNonMatchingSequences(): array
    {
        return [
            ['aa'],
        ];
    }

    protected function delimiter(): string
    {
        return '#';
    }
}
