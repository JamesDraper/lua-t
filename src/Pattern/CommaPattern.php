<?php
declare(strict_types=1);

namespace LuaT\Pattern;

class CommaPattern extends NonCapturingGroupPattern
{
    public function __construct()
    {
        parent::__construct(',');
    }
}
