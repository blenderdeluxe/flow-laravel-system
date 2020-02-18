<?php

namespace BlenderDeluxe\FlowLaravelSystem\Facades;

use Illuminate\Support\Facades\Facade;

class Flow extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \BlenderDeluxe\FlowLaravelSystem\Flow::class;
    }
}
