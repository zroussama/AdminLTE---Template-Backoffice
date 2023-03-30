<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

$token = generateUniqueToken(32, '<Table-Name>','<Column-Name>');

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
