<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;

class Checkapi extends Controller
{
    use AuthorizesRequests, ValidatesRequests;


    public function checkapp()
    {
        return true;
    }
}
