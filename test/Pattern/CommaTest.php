<?php
declare(strict_types=1);

namespace Test\Pattern;

use PHPUnit\Framework\TestCase;

use LuaT\Pattern\Comma;

use function preg_match;

class CommaTest extends TestCase
{
    private Comma $comma;

    /**
     * @test
     */
    public function it_should_match_concatenate_sequences(): void
    {
        preg_match('~' . $this->comma . '~', 'a,a', $matches);

        $this->assertCount(1, $matches);
        $this->assertSame(',', $matches[0]);
    }

    /**
     * @test
     */
    public function it_should_not_match_non_concatenate_sequences(): void
    {
        preg_match('~' . $this->comma . '~', 'aa', $matches);

        $this->assertCount(0, $matches);
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->comma = new Comma;
    }
}
