<?php
declare(strict_types=1);

namespace Test\Pattern\LuaSyntax\Arithmetic;

use LuaT\Pattern\LuaSyntax\Arithmetic\AddPattern;

use Test\Pattern\TestCase;

class AddTest extends TestCase
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
