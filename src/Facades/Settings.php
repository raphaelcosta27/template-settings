<?php

namespace Raphaelcosta27\Settings\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Raphaelcosta27\Settings\Settings
 */
class Settings extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Raphaelcosta27\Settings\Settings::class;
    }
}
