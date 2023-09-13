<?php

namespace Vic\EmailLogger\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Vic\EmailLogger\EmailLogger
 */
class EmailLogger extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Vic\EmailLogger\EmailLogger::class;
    }
}
