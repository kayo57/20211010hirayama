<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class TodoController extends Controller

{
       public function index(Request $request)
    {

        $todos = DB::select('select * from todos');
        return view('index', ['todos' => $todos]);
        
        //$validate_rule = [
        //'content' => 'required|max:0'
        //];
        //$this->validate($request, $validate_rule );
        //$form = $request->all();
        //return view('index', ['txt
        //' => 'The content is required.']);
        //return redirect('/');
        
    }
    
    public function create(Request $request)
{
    $validate_rule = [
        'content' => 'required|max:20'
 ];
        $this->validate($request, $validate_rule);
        $form = $request->all();
        unset($form['_token']);
        Todo::create($form);
        return redirect('/');
    }


    public function update(Request $request)
    {
        $this->validate($request, Todo::$rules);
        $form = $request->all();
        unset($form['_token']);
        Todo::where('id', $request->id)->update($form);
        return redirect('/');
    }

    public function delete(Request $request)
    {
        $todo = Todo::find($request->id);
        view('index', ['form' => $todo]);
        Todo::find($request->id)->delete();
        return redirect('/');
    }
}
