<?php

namespace Happones\Zip\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Happones\Zip\Zip open($zip_file)
 * @method static \Happones\Zip\Zip create($zip_file, $overwrite = false)
 * @method static \Happones\Zip\Zip check($zip_file)
 */
class Zip extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'zip.wrapper';
    }
}
