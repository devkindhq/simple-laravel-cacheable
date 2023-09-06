<?php

namespace Devkind\SimpleLaravelCacheable;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Devkind\SimpleLaravelCacheable\Skeleton\SkeletonClass
 */
class SimpleLaravelCacheableFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'simple-laravel-cacheable';
    }
}
