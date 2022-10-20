<?php
declare(strict_types=1);

namespace Test\Unit\Tokenizer;

use LuaT\Tokenizer\GetValidDelimiters;

use Test\TestCase;

use function array_map;
use function preg_match;

class GetValidDelimitersTest extends TestCase
{
    /**
     * @test
     * @dataProvider providerDelimiters
     */
    public function it_should_return_valid_delimiters(string $delimiter): void
    {
        $this->assertSame(1, @preg_match($delimiter . 'a' . $delimiter, 'a'));
    }

    public function providerDelimiters(): array
    {
        $getValidDelimiters = new GetValidDelimiters;
        $delimiters = $getValidDelimiters();

        return array_map(
            fn (string $delimiter): array => [$delimiter],
            $delimiters
        );
    }
}
