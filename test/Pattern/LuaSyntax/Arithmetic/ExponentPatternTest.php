<?php
declare(strict_types=1);

namespace Test\Pattern\LuaSyntax\Arithmetic;

use LuaT\Pattern\LuaSyntax\Arithmetic\ExponentPattern;

use Test\Pattern\PatternTestCase;

class ExponentPatternTest extends PatternTestCase
{
    public function getPatternClass(): string
    {
        return ExponentPattern::class;
    }

    public function providerMatchingSequences(): array
    {
        return [
            ['a^a', '^'],
        ];
    }

    public function providerNonMatchingSequences(): array
    {
        return [
            ['aa'],
        ];
    }
}
