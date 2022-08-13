<?php
declare(strict_types=1);

namespace LuaT\Pattern;

class ConcatenatePattern extends NonCapturingGroupPattern
{
    public function __construct()
    {
        parent::__construct("\\.\\.");
    }
}
