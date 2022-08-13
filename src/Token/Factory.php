<?php
declare(strict_types=1);

namespace LuaT\Token;

class Factory
{
    public function __invoke(int $index, string $content, int $line, int $column): Token
    {
        $position = new Position($line, $column);

        return new Token($index, $content, $position);
    }
}
