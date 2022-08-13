<?php
declare(strict_types=1);

namespace LuaT\Pattern;

class NewLinePattern extends SimplePattern
{
    private const CHARS = ["\r\n", "\n", "\r"];

    public function __construct()
    {
        $orPattern = new OrPattern(...self::CHARS);

        parent::__construct($orPattern);
    }
}
