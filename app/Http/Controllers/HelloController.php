<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    //
    public function helloDebug()
    {

        var_dump(User::all());
    }


}
