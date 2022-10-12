<?php
declare(strict_types=1);

namespace Test\Tokenizer\Pattern\LuaSyntax\IfStructure;

use LuaT\Tokenizer\Pattern\LuaSyntax\IfStructure\IfPattern;

use Test\Tokenizer\Pattern\TestCase;

class IfTest extends TestCase
{
    public function getPatternClass(): string
    {
        return IfPattern::class;
    }

    public function providerMatchingSequences(): array
    {
        return [
            ['if', 'if'],
            ['.if', 'if'],
            ['if.', 'if'],
            ['.if.', 'if'],
        ];
    }

    public function providerNonMatchingSequences(): array
    {
        return [
            ['aa'],
            ['ifa'],
            ['aif'],
            ['aifa'],
        ];
    }
}
