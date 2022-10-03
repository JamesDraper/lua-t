<?php
declare(strict_types=1);

namespace Test\Pattern\LuaSyntax\Bracket;

use LuaT\Pattern\LuaSyntax\Bracket\ClosePattern;

use Test\Pattern\TestCase;

class CloseTest extends TestCase
{
    public function getPatternClass(): string
    {
        return ClosePattern::class;
    }

    public function providerMatchingSequences(): array
    {
        return [
            ['a)a', ')'],
        ];
    }

    public function providerNonMatchingSequences(): array
    {
        return [
            ['aa'],
        ];
    }
}
