<?php

namespace HearthComponents\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \HearthComponents\HearthComponents
 */
class HearthComponents extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \HearthComponents\HearthComponents::class;
    }
}
