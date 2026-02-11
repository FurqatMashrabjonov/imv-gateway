<?php

namespace Imv\Gateway\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Imv\Gateway\Gateway
 */
class Gateway extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Imv\Gateway\Gateway::class;
    }
}
