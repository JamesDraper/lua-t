<?php
declare(strict_types=1);

namespace Test\Tokenizer\Pattern\LuaSyntax;

use LuaT\Tokenizer\Pattern\LuaSyntax\ColonPattern;

use Test\Tokenizer\Pattern\TestCase;

class ColonTest extends TestCase
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
