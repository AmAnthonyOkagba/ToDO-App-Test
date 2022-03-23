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

    public function add(Request $request)
    {
        $todo = new ToDo();
        $todo->name = $request->input('name');
        $todo->save();
        return redirect('/');
    }
}
