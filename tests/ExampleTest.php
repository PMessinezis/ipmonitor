<?php

namespace Pmessinezis\Ipmonitor\Tests;

use Orchestra\Testbench\TestCase;
use Pmessinezis\Ipmonitor\IpmonitorServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [IpmonitorServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
