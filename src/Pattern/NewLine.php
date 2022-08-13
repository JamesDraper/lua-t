<?php
declare(strict_types=1);

namespace LuaT\Pattern;

use function implode;

class NewLine extends SimplePattern
{
    private const CHARS = ["\r\n", "\n", "\r"];

    public function __construct()
    {
        $pattern = implode('|', self::CHARS);

        parent::__construct($pattern);
    }
}
