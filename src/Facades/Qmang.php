<?php

namespace Qmang\Wechat\Facades;

use Illuminate\Support\Facades\Facade;

class Qmang extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'qmang';
    }
}