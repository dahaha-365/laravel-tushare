<?php
declare(strict_types=1);

namespace Tushare\Tests;

/**
 * Class TestCase
 *
 * @package Tushare\Tests
 */
class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return [\Tushare\TushareServiceProvider::class];
    }
}
