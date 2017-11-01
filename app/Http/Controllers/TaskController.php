<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Http\Response;

class TaskController extends Controller
{
    //
    public function home()
    {
        return response()->make('Hello welcome home!');
    }
}
