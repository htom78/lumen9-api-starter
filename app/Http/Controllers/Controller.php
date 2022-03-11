<?php

namespace App\Http\Controllers;

use Jiannei\Response\Laravel\Support\Traits\ExceptionTrait;
use Laravel\Lumen\Routing\Controller as BaseController;

abstract class Controller extends BaseController
{
    use ExceptionTrait;
}
