<?php
declare(strict_types=1);

namespace Test\Pattern;

use LuaT\Pattern\ConcatenatePattern;

class ConcatenatePatternTest extends PatternTestCase
{
    public function getPatternClass(): string
    {
        return ConcatenatePattern::class;
    }

    public function providerMatchingSequences(): array
    {
        return [
            ['a..a', '..'],
        ];
    }

    public function providerNonMatchingSequences(): array
    {
        return [
            ['aa'],
        ];
    }
}
