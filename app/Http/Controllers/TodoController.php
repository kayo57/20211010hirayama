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
        //$this->validate($request, Todo::$rules);
        //$validate_rule= $request -> validata([
            $validate_rule = [
                'content' => 'required|max:20'
 ];
        //$from = $request->all();
        //Todo::create($from);
        //$this->validate($request, $validate_rule);

        
        $this->validate($request, $validate_rule);
        //$this->validate($request, Todo::$rules);
        $form = $request->all();
        Todo::create($form);
        
        return $redirect('/');
            }
    //{
        //return $request;
    //}
}