<?php
declare(strict_types=1);

namespace Test\Pattern\LuaSyntax\Arithmetic;

use LuaT\Pattern\LuaSyntax\Arithmetic\DivisionPattern;

use Test\Pattern\TestCase;

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
