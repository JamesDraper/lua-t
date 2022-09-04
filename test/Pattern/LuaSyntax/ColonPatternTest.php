<?php
declare(strict_types=1);

namespace Test\Pattern\LuaSyntax;

use LuaT\Pattern\LuaSyntax\ColonPattern;

use Test\Pattern\PatternTestCase;

class ColonPatternTest extends PatternTestCase
{
    public function getPatternClass(): string
    {
        return ColonPattern::class;
    }

    public function providerMatchingSequences(): array
    {
        return [
            ['a:a', ':'],
        ];
    }

    public function providerNonMatchingSequences(): array
    {
        return [
            ['aa'],
        ];
    }
}
