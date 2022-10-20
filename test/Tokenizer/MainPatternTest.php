<?php
declare(strict_types=1);

namespace Test\Tokenizer;

use LuaT\Tokenizer\GetValidDelimiters;
use LuaT\Tokenizer\Pattern\Pattern;
use LuaT\Tokenizer\MainPattern;
use LuaT\Tokenizer\Token\Token;

use Test\TestCase;

use function preg_match_all;
use function array_shift;
use function preg_match;

use const PREG_OFFSET_CAPTURE;

class MainPatternTest extends TestCase
{
    /**
     * @test
     */
    public function it_produces_a_valid_pattern(): void
    {
        $getValidDelimiters = $this->makeGetValidDelimitersMock('~');

        $token1 = $this->makeTokenMock('a', 3, 1);
        $token2 = $this->makeTokenMock('b', 1, 2);

        $mainPattern = new MainPattern($getValidDelimiters, $token1, $token2);
        $pattern = $mainPattern->getPattern();

        $this->assertNotFalse(@preg_match($pattern, 'a'));
    }

    /**
     * @test
     * @depends it_produces_a_valid_pattern
     */
    public function it_should_produce_a_pattern_which_can_parse_source(): void
    {
        $getValidDelimiters = $this->makeGetValidDelimitersMock('~');

        $token1 = $this->makeTokenMock('a', 3, 1);
        $token2 = $this->makeTokenMock('b', 1, 2);
        $token3 = $this->makeTokenMock('c', 5, 3);
        $token4 = $this->makeTokenMock('d', 2, 4);
        $token5 = $this->makeTokenMock('e', 4, 5);

        $mainPattern = new MainPattern(
            $getValidDelimiters,
            $token1,
            $token2,
            $token3,
            $token4,
            $token5
        );

        @preg_match_all($mainPattern->getPattern(), 'abb' . "\n" . 'cdfe', $matches, PREG_OFFSET_CAPTURE);
        @array_shift($matches);

        $expected = [
            [
                ['', -1],
                ['b', 1],
                ['b', 2],
                ['', -1],
                ['', -1],
                ['', -1],
            ],
            [
                ['', -1],
                ['', -1],
                ['', -1],
                ['', -1],
                ['d', 5],
                ['', -1],
            ],
            [
                ['a', 0],
                ['', -1],
                ['', -1],
                ['', -1],
                ['', -1],
                ['', -1],
            ],
            [
                ['', -1],
                ['', -1],
                ['', -1],
                ['', -1],
                ['', -1],
                ['e', 7],
            ],
            [
                ['', -1],
                ['', -1],
                ['', -1],
                ['c', 4],
                ['', -1],
                ['', -1],
            ],
        ];

        $this->assertSame($expected, $matches);
    }

    /**
     * @test
     * @depends it_produces_a_valid_pattern
     */
    public function it_should_allow_tokens_to_take_precedence_over_other_tokens(): void
    {
        $getValidDelimiters = $this->makeGetValidDelimitersMock('~');

        $token1 = $this->makeTokenMock('a', 1, 1);
        $token2 = $this->makeTokenMock('b', 2, 2);
        $token3 = $this->makeTokenMock('c', 3, 3);
        $token4 = $this->makeTokenMock('d', 5, 4);
        $token5 = $this->makeTokenMock('dd', 4, 5);

        $mainPattern = new MainPattern(
            $getValidDelimiters,
            $token1,
            $token2,
            $token3,
            $token4,
            $token5
        );

        @preg_match_all($mainPattern->getPattern(), 'abcdd', $matches, PREG_OFFSET_CAPTURE);
        @array_shift($matches);

        $expected = [
            [
                ['a', 0],
                ['', -1],
                ['', -1],
                ['', -1],
            ],
            [
                ['', -1],
                ['b', 1],
                ['', -1],
                ['', -1],
            ],
            [
                ['', -1],
                ['', -1],
                ['c', 2],
                ['', -1],
            ],
            [
                ['', -1],
                ['', -1],
                ['', -1],
                ['dd', 3],
            ],
            [
                ['', -1],
                ['', -1],
                ['', -1],
                ['', -1],
            ],
        ];

        $this->assertSame($expected, $matches);
    }

    /**
     * @test
     */
    public function it_should_order_indexes_by_priority(): void
    {
        $getValidDelimiters = $this->makeGetValidDelimitersMock('~');

        $token1 = $this->makeTokenMock('a', 3, 1);
        $token2 = $this->makeTokenMock('b', 1, 2);
        $token3 = $this->makeTokenMock('c', 5, 3);
        $token4 = $this->makeTokenMock('d', 2, 4);
        $token5 = $this->makeTokenMock('e', 4, 5);

        $mainPattern = new MainPattern(
            $getValidDelimiters,
            $token1,
            $token2,
            $token3,
            $token4,
            $token5
        );

        $indexes = $mainPattern->getIndexes();

        $expected = [
            $token2->getIndex(),
            $token4->getIndex(),
            $token1->getIndex(),
            $token5->getIndex(),
            $token3->getIndex(),
        ];

        $this->assertSame($expected, $indexes);
    }

    private function makeTokenMock(string $pattern, int $priority, int $index): Token
    {
        $mock = $this->makeMock(Token::class);

        $mock->getPattern()->willReturn($this->makePatternMock($pattern));
        $mock->getPriority()->willReturn($priority);
        $mock->getIndex()->willReturn($index);

        return $mock->reveal();
    }

    private function makePatternMock(string $pattern): Pattern
    {
        $mock = $this->makeMock(Pattern::class);

        $mock->__toString()->willReturn($pattern);

        return $mock->reveal();
    }

    private function makeGetValidDelimitersMock(string ...$validDelimiters): GetValidDelimiters
    {
        $mock = $this->makeMock(GetValidDelimiters::class);

        $mock->__invoke()->willReturn($validDelimiters);

        return $mock->reveal();
    }
}
