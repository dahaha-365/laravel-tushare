<?php
namespace Tushare;

class Facade extends \Illuminate\Support\Facades\Facade
{

    protected static function getFacadeAccessor()
    {
        return \Tushare::class;
    }
}
