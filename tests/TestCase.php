<?php

namespace Imv\Gateway\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Imv\Gateway\GatewayServiceProvider;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            GatewayServiceProvider::class,
        ];
    }
}
