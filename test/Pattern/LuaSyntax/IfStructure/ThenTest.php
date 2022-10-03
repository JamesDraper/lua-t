<?php
declare(strict_types=1);

namespace Test\Pattern\LuaSyntax\IfStructure;

use LuaT\Pattern\LuaSyntax\IfStructure\ThenPattern;

use Test\Pattern\TestCase;

class ThenTest extends TestCase
{
    public function getPatternClass(): string
    {
        return ThenPattern::class;
    }

    public function providerMatchingSequences(): array
    {
        return [
            ['then', 'then'],
            ['.then', 'then'],
            ['then.', 'then'],
            ['.then.', 'then'],
        ];
    }

    public function providerNonMatchingSequences(): array
    {
        return [
            ['aa'],
            ['thena'],
            ['athen'],
            ['athena'],
        ];
    }
}
