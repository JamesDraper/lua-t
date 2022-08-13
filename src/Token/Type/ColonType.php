<?php
declare(strict_types=1);

namespace LuaT\Token\Type;

use LuaT\Pattern\Lua\ColonPattern;
use LuaT\Token\Index;

class ColonType extends Type
{
    public function __construct()
    {
        parent::__construct(Priority::COLON, Index::COLON, new ColonPattern);
    }
}
