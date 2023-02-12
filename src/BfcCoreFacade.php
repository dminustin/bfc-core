<?php

namespace Dminustin\BfcCore;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Dminustin\BfcCore\Skeleton\SkeletonClass
 */
class BfcCoreFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'bfc-core';
    }
}
