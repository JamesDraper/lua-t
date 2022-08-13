<?php
declare(strict_types=1);

namespace Test\Pattern;

use LuaT\Pattern\CommaPattern;

class CommaPatternTest extends PatternTestCase
{
    public function getPatternClass(): string
    {
        return CommaPattern::class;
    }

    public function providerMatchingSequences(): array
    {
        return [
            ['a,a', ','],
        ];
    }

    public function providerNonMatchingSequences(): array
    {
        return [
            ['aa'],
        ];
    }
}
