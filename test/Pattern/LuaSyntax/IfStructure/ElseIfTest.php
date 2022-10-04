<?php
declare(strict_types=1);

namespace Test\Pattern\LuaSyntax\IfStructure;

use LuaT\Pattern\LuaSyntax\IfStructure\ElseIfPattern;

use Test\Pattern\TestCase;

class ElseIfTest extends TestCase
{
    public function getPatternClass(): string
    {
        return ElseIfPattern::class;
    }

    public function providerMatchingSequences(): array
    {
        return [
            ['elseif', 'elseif'],
            ['.elseif', 'elseif'],
            ['elseif.', 'elseif'],
            ['.elseif.', 'elseif'],
        ];
    }

    public function providerNonMatchingSequences(): array
    {
        return [
            ['aa'],
            ['elseifa'],
            ['aelseif'],
            ['aelseifa'],
        ];
    }
}