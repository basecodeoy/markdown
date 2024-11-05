<?php

declare(strict_types=1);

namespace Tests;

use BaseCodeOy\Markdown\ServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

/**
 * @internal
 */
abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            ServiceProvider::class,
        ];
    }
}
