<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use App\Http\Requests\TodoRequest;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('index', [
            'todos' => $todos
        ]);
    }
    
    public function create(TodoRequest $request)
    {
        $form = $request->content;
        Todo::create([
            'content' => $form,
        ]);
        return redirect('/');
    }

    public function update(TodoRequest $request)
    {
        $form  =  $request->content;
        unset($form['_token']);
        Todo::find($request->id)->update($form);
        return redirect('/');
    }

    public function remove(Request $request)
    {
        Todo::find($request->id)->delete();
        return redirect('/');
    }
}
