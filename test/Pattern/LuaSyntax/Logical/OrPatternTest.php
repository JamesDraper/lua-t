<?php
declare(strict_types=1);

namespace Test\Pattern\LuaSyntax\Logical;

use LuaT\Pattern\LuaSyntax\Logical\OrPattern;

use Test\Pattern\PatternTestCase;

class OrPatternTest extends PatternTestCase
{
    public function getPatternClass(): string
    {
        return OrPattern::class;
    }

    public function providerMatchingSequences(): array
    {
        return [
            ['or', 'or'],
            ['.or', 'or'],
            ['or.', 'or'],
            ['.or.', 'or'],
        ];
    }

    public function providerNonMatchingSequences(): array
    {
        return [
            ['aa'],
            ['ora'],
            ['aor'],
            ['aora'],
        ];
    }
}
