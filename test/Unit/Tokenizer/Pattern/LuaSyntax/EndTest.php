<?php
declare(strict_types=1);

namespace Test\Unit\Tokenizer\Pattern\LuaSyntax;

use LuaT\Tokenizer\Pattern\LuaSyntax\EndPattern;

use Test\Unit\Tokenizer\Pattern\TestCase;

class EndTest extends TestCase
{
    public function getPatternClass(): string
    {
        return EndPattern::class;
    }

    public function providerMatchingSequences(): array
    {
        return [
            ['end', 'end'],
            ['.end', 'end'],
            ['end.', 'end'],
            ['.end.', 'end'],
        ];
    }

    public function providerNonMatchingSequences(): array
    {
        return [
            ['aa'],
            ['enda'],
            ['aend'],
            ['aenda'],
        ];
    }
}
