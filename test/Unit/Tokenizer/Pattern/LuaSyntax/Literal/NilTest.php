<?php
declare(strict_types=1);

namespace Test\Unit\Tokenizer\Pattern\LuaSyntax\Literal;

use LuaT\Tokenizer\Pattern\LuaSyntax\Literal\NilPattern;

use Test\Unit\Tokenizer\Pattern\TestCase;

class NilTest extends TestCase
{
    public function getPatternClass(): string
    {
        return NilPattern::class;
    }

    public function providerMatchingSequences(): array
    {
        return [
            ['nil', 'nil'],
            ['.nil', 'nil'],
            ['nil.', 'nil'],
            ['.nil.', 'nil'],
        ];
    }

    public function providerNonMatchingSequences(): array
    {
        return [
            ['aa'],
            ['nila'],
            ['anil'],
            ['anila'],
        ];
    }
}
