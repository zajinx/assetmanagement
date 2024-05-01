<?php

namespace JinxIT\AssetManagement\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \JinxIT\AssetManagement\AssetManagement
 */
class AssetManagement extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \JinxIT\AssetManagement\AssetManagement::class;
    }
}
