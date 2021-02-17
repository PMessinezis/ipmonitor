<?php

namespace Pmessinezis\Ipmonitor;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Pmessinezis\Ipmonitor\Skeleton\SkeletonClass
 */
class IpmonitorFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'ipmonitor';
    }
}
