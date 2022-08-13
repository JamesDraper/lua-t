<?php
declare(strict_types=1);

namespace LuaT\Token;

class Token
{
    private Position $position;

    private string $content;

    private int $index;

    public function __construct(int $index, string $content, Position $position)
    {
        $this->position = $position;
        $this->content = $content;
        $this->index = $index;
    }

    public function getPosition(): Position
    {
        return $this->position;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function getIndex(): int
    {
        return $this->index;
    }
}
