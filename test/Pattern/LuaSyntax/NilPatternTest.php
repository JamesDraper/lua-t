<?php
declare(strict_types=1);

namespace Test\Pattern\LuaSyntax;

use LuaT\Pattern\LuaSyntax\NilPattern;
use Test\Pattern\PatternTestCase;

class NilPatternTest extends PatternTestCase
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
