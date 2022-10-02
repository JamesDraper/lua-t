<?php
declare(strict_types=1);

namespace LuaT\Pattern\LuaSyntax;

use LuaT\Pattern\NonCapturingGroupPattern;
use LuaT\Pattern\SimplePattern;
use LuaT\Pattern\OrPattern;

class WhiteSpacePattern extends SimplePattern
{
    private const CHARACTERS = [
        "\t",
        ' ',
    ];

    public function __construct()
    {
        $characters = new NonCapturingGroupPattern(
            new OrPattern(...static::CHARACTERS)
        );

        parent::__construct($characters . '+');
    }
}
