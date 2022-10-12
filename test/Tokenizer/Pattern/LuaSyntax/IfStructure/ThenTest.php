<?php
declare(strict_types=1);

namespace Test\Tokenizer\Pattern\LuaSyntax\IfStructure;

use LuaT\Tokenizer\Pattern\LuaSyntax\IfStructure\ThenPattern;

use Test\Tokenizer\Pattern\TestCase;

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
