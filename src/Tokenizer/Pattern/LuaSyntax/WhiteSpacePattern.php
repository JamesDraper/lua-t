<?php
declare(strict_types=1);

namespace LuaT\Tokenizer\Pattern\LuaSyntax;

use LuaT\Tokenizer\Pattern\Group\NonCapturingPattern;
use LuaT\Tokenizer\Pattern\SimplePattern;
use LuaT\Tokenizer\Pattern\OrPattern;

class WhiteSpacePattern extends SimplePattern
{
    private const CHARACTERS = [
        "\t",
        ' ',
    ];

    public function __construct()
    {
        $characters = new NonCapturingPattern(
            new OrPattern(...static::CHARACTERS)
        );

        parent::__construct($characters . '+');
    }
}
