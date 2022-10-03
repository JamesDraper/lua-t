<?php
declare(strict_types=1);

namespace Test\Pattern\LuaSyntax\Literal;

use LuaT\Pattern\LuaSyntax\Literal\NilPattern;

use Test\Pattern\TestCase;

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
