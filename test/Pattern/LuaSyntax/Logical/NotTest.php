<?php
declare(strict_types=1);

namespace Test\Pattern\LuaSyntax\Logical;

use LuaT\Pattern\LuaSyntax\Logical\NotPattern;

use Test\Pattern\TestCase;

class NotTest extends TestCase
{
    public function getPatternClass(): string
    {
        return NotPattern::class;
    }

    public function providerMatchingSequences(): array
    {
        return [
            ['not', 'not'],
            ['.not', 'not'],
            ['not.', 'not'],
            ['.not.', 'not'],
        ];
    }

    public function providerNonMatchingSequences(): array
    {
        return [
            ['aa'],
            ['nota'],
            ['anot'],
            ['anota'],
        ];
    }
}