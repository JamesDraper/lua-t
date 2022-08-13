<?php
declare(strict_types=1);

namespace LuaT\Token\Type;

use LuaT\Pattern\Lua\EqualsPattern;
use LuaT\Token\Index;

class EqualsType extends Type
{
    public function __construct()
    {
        parent::__construct(Priority::EQUALS, Index::EQUALS, new EqualsPattern);
    }
}
