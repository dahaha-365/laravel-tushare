<?php

declare(strict_types=1);

namespace Tushare\Tests;

use Illuminate\Config\Repository;
use Tushare\TushareServiceProvider;

/**
 * Class TestCase.
 */
class TestCase extends \Orchestra\Testbench\TestCase
{

    protected function setUp(): void {
        parent::setUp();
    }

    protected function getEnvironmentSetUp( $app ) {
        $app->configPath(__DIR__.'../src/config.php');
    }

    protected function getPackageProviders($app)
    {
        return [
            TushareServiceProvider::class,
        ];
    }

    protected function getPackageAliases( $app ) {
        return [
            'tushare' => \Tushare::class,
        ];
    }
}
