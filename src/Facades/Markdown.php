<?php

declare(strict_types=1);

namespace BaseCodeOy\Markdown\Facades;

use Illuminate\Support\Facades\Facade;

final class Markdown extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'markdown.converter';
    }
}
