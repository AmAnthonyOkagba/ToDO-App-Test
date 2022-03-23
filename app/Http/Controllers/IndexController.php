<?php

namespace App\Http\Controllers;

use App\Models\ToDo;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $todo = ToDo::all();
        return view('index', ['todo'=>$todo]);
    }
}
