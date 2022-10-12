<?php
declare(strict_types=1);

namespace Test\Tokenizer\Pattern\LuaSyntax\IfStructure;

use LuaT\Tokenizer\Pattern\LuaSyntax\IfStructure\ElseIfPattern;

use Test\Tokenizer\Pattern\TestCase;

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
