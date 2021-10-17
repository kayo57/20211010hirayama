<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class TodoController extends Controller

{
       public function index()
    {
        //$items = Todo::all();

        //$todos = Todo::orderBy('content', 'desc','created_at', 'desc')->get();

        //return view('index', ['todos' => $todos]);

        $todos = DB::select('select * from todos');
        return view('index', ['todos' => $todos]);
        
        //return view('index');
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
        unset($form['_token']);
      //dd($form) ;
        Todo::create($form);

        //DB::insert('insert into todo (id, content, created_at, updated_at) values (:id, :content, :created_at, :updated_at)', $param);
        return redirect('/');
    }


    
    
    public function update(Request $request)
    {
        
        $from =[
            'cotent' => $request->content,
            'updataed_at' => $request->updataed_at
        ];
        $this->validate($request, Todo::$rules);
        $form = $request->all();
        unset($form['_token']);
        Todo::where('id', $request->id)->update($form);
        
        //DB::update('update todos set content =:content, upadataed_at =:upadated_at', $from);
        //$form = $request->all();
        //Todo::where('content', $request->content)->update($form);
        
        
        dd($request);
        return redirect('/');
        
    }

    
            
}