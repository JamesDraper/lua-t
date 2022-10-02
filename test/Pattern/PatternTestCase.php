<?php
declare(strict_types=1);

namespace Test\Pattern;

use LuaT\Pattern\Pattern;

use PHPUnit\Framework\TestCase;

use function preg_match;

abstract class PatternTestCase extends TestCase
{
    private Pattern $pattern;

    abstract public function getPatternClass(): string;

    /**
     * @test
     * @dataProvider providerMatchingSequences
     */
    public function it_should_parse_matching_character_sequences(string $sequence, string $expected): void
    {
        preg_match('#' . $this->pattern . '#', $sequence, $matches);

        $this->assertCount(1, $matches);
        $this->assertSame($expected, $matches[0]);
    }

    abstract public function providerMatchingSequences(): array;

    /**
     * @test
     * @dataProvider providerNonMatchingSequences
     */
    public function it_should_not_parse_non_matching_character_sequences(string $sequence): void
    {
        preg_match('#' . $this->pattern . '#', $sequence, $matches);

        $this->assertCount(0, $matches);
    }

    abstract public function providerNonMatchingSequences(): array;

    protected function setUp(): void
    {
        $this->pattern = $this->makePattern();

        parent::setUp();
    }

    private function makePattern(): Pattern
    {
        $classPath = $this->getPatternClass();

        return new $classPath;
    }
}
