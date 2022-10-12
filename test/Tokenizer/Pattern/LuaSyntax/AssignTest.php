<?php
declare(strict_types=1);

namespace Test\Tokenizer\Pattern\LuaSyntax;

use LuaT\Tokenizer\Pattern\LuaSyntax\AssignPattern;

use Test\Tokenizer\Pattern\TestCase;

class AssignTest extends TestCase
{
    public function getPatternClass(): string
    {
        return AssignPattern::class;
    }

    public function providerMatchingSequences(): array
    {
        return [
            ['a=a', '='],
        ];
    }

    public function providerNonMatchingSequences(): array
    {
        return [
            ['aa'],
        ];
    }
}
