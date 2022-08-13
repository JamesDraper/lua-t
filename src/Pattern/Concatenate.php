<?php
declare(strict_types=1);

namespace LuaT\Pattern;

class Concatenate extends SimplePattern
{
    public function __construct()
    {
        parent::__construct("\\.\\.");
    }
}
