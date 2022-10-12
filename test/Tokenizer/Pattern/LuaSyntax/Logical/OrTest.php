<?php
declare(strict_types=1);

namespace Test\Tokenizer\Pattern\LuaSyntax\Logical;

use LuaT\Tokenizer\Pattern\LuaSyntax\Logical\OrPattern;

use Test\Tokenizer\Pattern\TestCase;

class OrTest extends TestCase
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
