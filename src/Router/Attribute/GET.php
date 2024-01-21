<?php

namespace Xel\Async\Router\Attribute;
use Attribute;

#[Attribute(Attribute::TARGET_METHOD|Attribute::IS_REPEATABLE)]
class GET extends Router
{
    public function __construct(string $path)
    {
        parent::__construct('GET', $path);
    }
}