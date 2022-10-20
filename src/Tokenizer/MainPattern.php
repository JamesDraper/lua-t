<?php
declare(strict_types=1);

namespace LuaT\Tokenizer;

use LuaT\Tokenizer\Pattern\Group\CapturingPattern;
use LuaT\Tokenizer\Pattern\OrPattern;
use LuaT\Tokenizer\Pattern\Pattern;
use LuaT\Tokenizer\Token\Token;

use function str_contains;
use function array_map;
use function usort;

class MainPattern
{
    private string $pattern;

    /**
     * @var int[]
     */
    private array $indexes;

    public function __construct(GetValidDelimiters $getValidDelimiters, Token ...$tokens)
    {
        $sorted = $this->sortTokens($tokens);

        $this->setPattern($getValidDelimiters, $sorted);
        $this->setIndexes($sorted);
    }

    public function getPattern(): string
    {
        return $this->pattern;
    }

    /**
     * @return int[]
     */
    public function getIndexes(): array
    {
        return $this->indexes;
    }

    /**
     * @param Token[] $tokens
     */
    private function setPattern(GetValidDelimiters $getValidDelimiters, array $tokens): void
    {
        $pattern = (string) new OrPattern(
            ...array_map(
                fn (Token $token): Pattern => new CapturingPattern($token->getPattern()),
                $tokens
            )
        );

        $validDelimiters = $getValidDelimiters();
        foreach ($validDelimiters as $validDelimiter) {
            if (!str_contains($pattern, $validDelimiter)) {
                break;
            }
        }

        $this->pattern = $validDelimiter . $pattern . $validDelimiter;
    }

    /**
     * @param Token[] $tokens
     */
    private function setIndexes(array $tokens): void
    {
        $this->indexes = array_map(fn (Token $token): int => $token->getIndex(), $tokens);
    }

    /**
     * @param Token[] $tokens
     */
    private function sortTokens(array $tokens): array
    {
        usort($tokens, fn (Token $a, Token $b): int => $a->getPriority() <=> $b->getPriority());

        return $tokens;
    }
}
