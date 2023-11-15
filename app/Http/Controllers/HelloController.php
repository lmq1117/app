<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HelloController extends Controller
{
    //
    public function helloDebug()
    {
        $userModel = new User();
        $one = DB::select("select * from users where 1 limit 1");
        var_dump($one);
    }


}
