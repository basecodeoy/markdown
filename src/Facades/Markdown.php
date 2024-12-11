<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\Markdown\Facades;

use Illuminate\Support\Facades\Facade;

final class Markdown extends Facade
{
    #[\Override()]
    protected static function getFacadeAccessor()
    {
        return 'markdown.converter';
    }
}
