<?php

declare(strict_types=1);

namespace Tushare\Tests;

/**
 * Class PackageTest.
 *
 * @covers \Tushare\TushareServiceProvider
 */
class PackageTest extends TestCase
{

    public function testAppCanWork(): void
    {
        $exec = app('tushare')->exec('');
        $this->assertInstanceOf(\Tushare::class, $exec);
    }
}
