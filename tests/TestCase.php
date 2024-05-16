<?php

namespace Happones\Zip\Tests;

use Happones\Zip\ZipServiceProvider;

abstract class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function setUp() : void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [ZipServiceProvider::class];
    }
}