<?php
declare(strict_types=1);

namespace Tushare\Tests;

/**
 * Class PackageTest
 *
 * @covers \Tushare\TushareServiceProvider Tushare
 */
class PackageTest extends TestCase
{
    public function testTushareCanWork(): void
    {
        $this->assertIsArray(\Tushare::init('')->exec('')->result);
    }

    public function testAppCanWork(): void
    {
        $testbench = new class() extends \Orchestra\Testbench\TestCase {
            //
        };
        $app = $testbench->createApplication();
        $app->getProviders('tushare');
    }
}
