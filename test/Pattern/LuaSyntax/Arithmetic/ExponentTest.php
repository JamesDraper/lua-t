<?php
declare(strict_types=1);

namespace Test\Pattern\LuaSyntax\Arithmetic;

use LuaT\Pattern\LuaSyntax\Arithmetic\ExponentPattern;

use Test\Pattern\TestCase;

class ExponentTest extends TestCase
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
