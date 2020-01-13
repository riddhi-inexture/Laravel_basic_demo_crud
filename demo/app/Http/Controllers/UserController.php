<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function show()
    {
        return view('greet',['name'=>'Riddhi']);
    }

}
