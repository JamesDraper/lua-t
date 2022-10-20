<?php
declare(strict_types=1);

namespace Test\Tokenizer;

use LuaT\Tokenizer\GetValidDelimiters;

use PHPUnit\Framework\TestCase;

use function preg_match;
use function array_map;

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
