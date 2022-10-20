<?php
declare(strict_types=1);

namespace Test\Unit\Tokenizer\Pattern\LuaSyntax;

use LuaT\Tokenizer\Pattern\LuaSyntax\ColonPattern;

use Test\Unit\Tokenizer\Pattern\TestCase;

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
