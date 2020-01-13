<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;

class CrudCotroller extends Controller
{
    public function index()
    {
        $data= _student::latest()->paginate(5);
        return view('index',compact('data'))
        ->with('i',(requst()->input('page',1)-1)*5);
    }

}   
