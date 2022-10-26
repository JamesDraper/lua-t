<?php
declare(strict_types=1);

namespace LuaT\Tokenizer\Token;

use function array_map;

class Factory
{
    private const CLASSES = [
        ColonToken::class,
        CommaToken::class,
        ConcatenateToken::class,
        DotToken::class,
        EqualsToken::class,
    ];

    /**
     * @return Token[]
     */
    public function __invoke(): array
    {
        return array_map(
            fn (string $classPath) => new $classPath,
            self::CLASSES
        );
    }
}
