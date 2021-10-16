<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
       public function index()
    {
        $items = Todo::all();
        return view('index');
    }
    
    
        
    public function create(Request $request)
    {
        $this->validate($request, Todo::$rules);
        $from = $request->all();
        Todo::create($from);
        return $redirect('/todo/create');
    }
}
 