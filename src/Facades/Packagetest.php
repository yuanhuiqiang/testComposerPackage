<?php
/**
 * Created by PhpStorm.
 * User: cer
 * Date: 2019/1/7
 * Time: 16:42
 */

namespace Aex\Packagetest\Facades;

use Illuminate\Support\Facades\Facade;

class Packagetest extends Facade {
    protected static function getFacadeAccessor() {
        return 'packagetest';
    }
}