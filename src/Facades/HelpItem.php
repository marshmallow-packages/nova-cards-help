<?php

namespace Marshmallow\Cards\Help\Facades;

class HelpItem extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor()
    {
        return \Marshmallow\Cards\Help\HelpItem::class;
    }
}
