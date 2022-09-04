<?php
declare(strict_types=1);

namespace LuaT\Token\Type;

use LuaT\Pattern\LuaSyntax\ConcatenatePattern;
use LuaT\Token\Index;

class ConcatenateType extends Type
{
    public function __construct()
    {
        parent::__construct(Priority::CONCATENATE, Index::CONCATENATE, new ConcatenatePattern);
    }
}
