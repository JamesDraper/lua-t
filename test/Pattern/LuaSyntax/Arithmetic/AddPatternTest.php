<?php
declare(strict_types=1);

namespace Test\Pattern\LuaSyntax\Arithmetic;

use LuaT\Pattern\LuaSyntax\Arithmetic\AddPattern;

use Test\Pattern\PatternTestCase;

class AddPatternTest extends PatternTestCase
{
    public function getPatternClass(): string
    {
        return AddPattern::class;
    }

    public function providerMatchingSequences(): array
    {
        return [
            ['a+a', '+'],
        ];
    }

    public function providerNonMatchingSequences(): array
    {
        return [
            ['aa'],
        ];
    }
}
