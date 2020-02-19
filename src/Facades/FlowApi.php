<?php

namespace BlenderDeluxe\FlowLaravelSystem\Facades;

use Illuminate\Support\Facades\Facade;

class FlowApi extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \BlenderDeluxe\FlowLaravelSystem\FlowApi::class;
    }
}
