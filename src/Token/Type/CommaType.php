<?php
declare(strict_types=1);

namespace LuaT\Token\Type;

use LuaT\Pattern\LuaSyntax\CommaPattern;
use LuaT\Token\Index;

class CommaType extends Type
{
    public function __construct()
    {
        parent::__construct(Priority::COMMA, Index::COMMA, new CommaPattern);
    }
}
