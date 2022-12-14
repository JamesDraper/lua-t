<?php
declare(strict_types=1);

namespace Test\Unit\Tokenizer\Pattern\LuaSyntax\Literal\Boolean;

use LuaT\Tokenizer\Pattern\LuaSyntax\Literal\NumberPattern;

use Test\Unit\Tokenizer\Pattern\TestCase;

class NumberTest extends TestCase
{
    public function getPatternClass(): string
    {
        return NumberPattern::class;
    }

    public function providerMatchingSequences(): array
    {
        return [
            ['-1', '-1'],
            ['.-1', '-1'],
            ['-1.', '-1'],
            ['.-1.', '-1'],
            ['-0', '-0'],
            ['.-0', '-0'],
            ['-0.', '-0'],
            ['.-0.', '-0'],
            ['-00', '-00'],
            ['.-00', '-00'],
            ['-00.', '-00'],
            ['.-00.', '-00'],
            ['0', '0'],
            ['.0', '0'],
            ['0.', '0'],
            ['.0.', '0'],
            ['00', '00'],
            ['.00', '00'],
            ['00.', '00'],
            ['.00.', '00'],
            ['1', '1'],
            ['.1', '1'],
            ['1.', '1'],
            ['.1.', '1'],
            ['01', '01'],
            ['.01', '01'],
            ['01.', '01'],
            ['.01.', '01'],
            ['-1.0', '-1.0'],
            ['.-1.0', '-1.0'],
            ['-1.0.', '-1.0'],
            ['.-1.0.', '-1.0'],
            ['-0.0', '-0.0'],
            ['.-0.0', '-0.0'],
            ['-0.0.', '-0.0'],
            ['.-0.0.', '-0.0'],
            ['-0.00', '-0.00'],
            ['.-0.00', '-0.00'],
            ['-0.00.', '-0.00'],
            ['.-0.00.', '-0.00'],
            ['0.0', '0.0'],
            ['.0.0', '0.0'],
            ['0.0.', '0.0'],
            ['.0.0.', '0.0'],
            ['0.00', '0.00'],
            ['.0.00', '0.00'],
            ['0.00.', '0.00'],
            ['.0.00.', '0.00'],
            ['1.0', '1.0'],
            ['.1.0', '1.0'],
            ['1.0.', '1.0'],
            ['.1.0.', '1.0'],
            ['01.0', '01.0'],
            ['.01.0', '01.0'],
            ['01.0.', '01.0'],
            ['.01.0.', '01.0'],
            ['-1.01', '-1.01'],
            ['.-1.01', '-1.01'],
            ['-1.01.', '-1.01'],
            ['.-1.01.', '-1.01'],
            ['-0.01', '-0.01'],
            ['.-0.01', '-0.01'],
            ['-0.01.', '-0.01'],
            ['.-0.01.', '-0.01'],
            ['-00.01', '-00.01'],
            ['.-00.01', '-00.01'],
            ['-00.01.', '-00.01'],
            ['.-00.01.', '-00.01'],
            ['0.01', '0.01'],
            ['.0.01', '0.01'],
            ['0.01.', '0.01'],
            ['.0.01.', '0.01'],
            ['00.01', '00.01'],
            ['.00.01', '00.01'],
            ['00.01.', '00.01'],
            ['.00.01.', '00.01'],
            ['1.01', '1.01'],
            ['.1.01', '1.01'],
            ['1.01.', '1.01'],
            ['.1.01.', '1.01'],
            ['01.01', '01.01'],
            ['.01.01', '01.01'],
            ['01.01.', '01.01'],
            ['.01.01.', '01.01'],
            ['-1.01', '-1.01'],
            ['.-1.01', '-1.01'],
            ['-1.01.', '-1.01'],
            ['.-1.01.', '-1.01'],
            ['-0.10', '-0.10'],
            ['.-0.10', '-0.10'],
            ['-0.10.', '-0.10'],
            ['.-0.10.', '-0.10'],
            ['-00.10', '-00.10'],
            ['.-00.10', '-00.10'],
            ['-00.10.', '-00.10'],
            ['.-00.10.', '-00.10'],
            ['0.10', '0.10'],
            ['.0.10', '0.10'],
            ['0.10.', '0.10'],
            ['.0.10.', '0.10'],
            ['00.10', '00.10'],
            ['.00.10', '00.10'],
            ['00.10.', '00.10'],
            ['.00.10.', '00.10'],
            ['1.10', '1.10'],
            ['.1.10', '1.10'],
            ['1.10.', '1.10'],
            ['.1.10.', '1.10'],
            ['01.10', '01.10'],
            ['.01.10', '01.10'],
            ['01.10.', '01.10'],
            ['.01.10.', '01.10'],
        ];
    }

    public function providerNonMatchingSequences(): array
    {
        return [
            ['aa'],
            ['truea'],
            ['atrue'],
            ['atruea'],
        ];
    }
}
