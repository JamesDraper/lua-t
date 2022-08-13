<?php
declare(strict_types=1);

namespace LuaT\Token;

use LogicException;

class Position
{
    private int $column;

    private int $line;

    /**
     * @throws LogicException
     */
    public function __construct(int $line, int $column)
    {
        if ($line < 1) {
            throw new LogicException('$line cannot be less than 1.');
        }

        if ($column < 1) {
            throw new LogicException('$column cannot be less than 1.');
        }

        $this->column = $column;
        $this->line = $line;
    }

    public function getColumn(): int
    {
        return $this->column;
    }

    public function getLine(): int
    {
        return $this->line;
    }
}
