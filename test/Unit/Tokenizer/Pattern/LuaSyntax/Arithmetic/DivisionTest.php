<?php
declare(strict_types=1);

namespace Test\Unit\Tokenizer\Pattern\LuaSyntax\Arithmetic;

use LuaT\Tokenizer\Pattern\LuaSyntax\Arithmetic\DivisionPattern;

use Test\Unit\Tokenizer\Pattern\TestCase;

class DivisionTest extends TestCase
{
    public function getPatternClass(): string
    {
        return DivisionPattern::class;
    }

    public function providerMatchingSequences(): array
    {
        return [
            ['a/a', '/'],
        ];
    }

    public function providerNonMatchingSequences(): array
    {
        return [
            ['aa'],
        ];
    }
}
