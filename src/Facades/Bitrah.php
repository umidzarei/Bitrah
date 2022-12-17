<?php

namespace Ako\Bitrah\Facades;

use Illuminate\Support\Facades\Facade;

class Bitrah extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'bitrah';
    }
}
