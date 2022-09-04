<?php
declare(strict_types=1);

namespace LuaT\Token\Type;

use LuaT\Pattern\LuaSyntax\DotPattern;
use LuaT\Token\Index;

class DotType extends Type
{
    public function __construct()
    {
        parent::__construct(Priority::DOT, Index::DOT, new DotPattern);
    }
}
