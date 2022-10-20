<?php
declare(strict_types=1);

namespace Test\Tokenizer\Pattern;

use function array_shift;
use function preg_match;

abstract class TestCase extends \PHPUnit\Framework\TestCase
{
    private string $pattern;

    abstract public function getPatternClass(): string;

    /**
     * @test
     * @dataProvider providerMatchingSequences
     */
    public function it_should_parse_matching_character_sequences(string $sequence, string $expected): void
    {
        @preg_match($this->pattern, $sequence, $matches);

        $this->assertSame($expected, $matches[0] ?? null);
    }

    abstract public function providerMatchingSequences(): array;

    /**
     * @test
     * @depends it_should_parse_matching_character_sequences
     */
    public function it_should_not_contain_capturing_groups(): void
    {
        $matching = $this->providerMatchingSequences();
        $valid = array_shift($matching)[0];

        @preg_match($this->pattern, $valid, $matches);

        $this->assertCount(1, $matches);
    }

    /**
     * @test
     * @dataProvider providerNonMatchingSequences
     */
    public function it_should_not_parse_non_matching_character_sequences(string $sequence): void
    {
        @preg_match($this->pattern, $sequence, $matches);

        $this->assertCount(0, $matches);
    }

    abstract public function providerNonMatchingSequences(): array;

    protected function delimiter(): string
    {
        return '~';
    }

    protected function setUp(): void
    {
        $this->pattern = $this->makePattern();

        parent::setUp();
    }

    private function makePattern(): string
    {
        $classPath = $this->getPatternClass();
        $pattern = new $classPath;

        return $this->delimiter() . $pattern . $this->delimiter();
    }
}
