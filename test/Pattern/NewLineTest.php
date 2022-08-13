<?php
declare(strict_types=1);

namespace Test\Pattern;

use PHPUnit\Framework\TestCase;

use LuaT\Pattern\NewLine;

use function preg_match;

class NewLineTest extends TestCase
{
    private NewLine $newLine;

    /**
     * @test
     * @dataProvider providerSourceStrings
     */
    public function it_should_match_new_line_sequences(string $string, string $expected): void
    {
        preg_match('~' . $this->newLine . '~', $string, $matches);

        $this->assertCount(1, $matches);
        $this->assertSame($expected, $matches[0]);
    }

    public function providerSourceStrings(): array
    {
        return [
            ["a\r\na", "\r\n"],
            ["a\na", "\n"],
            ["a\ra", "\r"],
        ];
    }

    /**
     * @test
     */
    public function it_should_not_match_new_line_sequences_that_do_not_exist(): void
    {
        preg_match('~' . $this->newLine . '~', 'aa', $matches);

        $this->assertCount(0, $matches);
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->newLine = new NewLine;
    }
}
