<?php
declare(strict_types=1);

namespace Test\Pattern\LuaSyntax\Bracket;

use LuaT\Pattern\LuaSyntax\Bracket\OpenPattern;

use Test\Pattern\PatternTestCase;

class OpenPatternTest extends PatternTestCase
{
    public function getPatternClass(): string
    {
        return OpenPattern::class;
    }

    public function providerMatchingSequences(): array
    {
        return [
            ['a(a', '('],
        ];
    }

    public function providerNonMatchingSequences(): array
    {
        return [
            ['aa'],
        ];
    }
}
