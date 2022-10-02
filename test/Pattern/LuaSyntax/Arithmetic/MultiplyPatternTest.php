<?php
declare(strict_types=1);

namespace Test\Pattern\LuaSyntax\Arithmetic;

use LuaT\Pattern\LuaSyntax\Arithmetic\MultiplyPattern;

use Test\Pattern\PatternTestCase;

class MultiplyPatternTest extends PatternTestCase
{
    public function getPatternClass(): string
    {
        return MultiplyPattern::class;
    }

    public function providerMatchingSequences(): array
    {
        return [
            ['a*a', '*'],
        ];
    }

    public function providerNonMatchingSequences(): array
    {
        return [
            ['aa'],
        ];
    }
}
