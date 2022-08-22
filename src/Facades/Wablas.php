<?php

namespace ZarulIzham\Wablas\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ZarulIzham\Wablas\Wablas
 */
class Wablas extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \ZarulIzham\Wablas\Wablas::class;
    }
}
