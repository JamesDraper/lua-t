<?php
declare(strict_types=1);

namespace Test\Unit\Tokenizer\Pattern\LuaSyntax\Logical;

use LuaT\Tokenizer\Pattern\LuaSyntax\Logical\NotPattern;

use Test\Unit\Tokenizer\Pattern\TestCase;

class NotTest extends TestCase
{
    public function getPatternClass(): string
    {
        return NotPattern::class;
    }

    public function providerMatchingSequences(): array
    {
        return [
            ['not', 'not'],
            ['.not', 'not'],
            ['not.', 'not'],
            ['.not.', 'not'],
        ];
    }

    public function providerNonMatchingSequences(): array
    {
        return [
            ['aa'],
            ['nota'],
            ['anot'],
            ['anota'],
        ];
    }
}
