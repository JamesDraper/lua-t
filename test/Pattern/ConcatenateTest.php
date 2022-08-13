<?php
declare(strict_types=1);

namespace Test\Pattern;

use PHPUnit\Framework\TestCase;

use LuaT\Pattern\Concatenate;

use function preg_match;

class ConcatenateTest extends TestCase
{
    private Concatenate $concatenate;

    /**
     * @test
     */
    public function it_should_match_concatenate_sequences(): void
    {
        preg_match('~' . $this->concatenate . '~', 'a..a', $matches);

        $this->assertCount(1, $matches);
        $this->assertSame('..', $matches[0]);
    }

    /**
     * @test
     */
    public function it_should_not_match_non_concatenate_sequences(): void
    {
        preg_match('~' . $this->concatenate . '~', 'aa', $matches);

        $this->assertCount(0, $matches);
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->concatenate = new Concatenate;
    }
}
