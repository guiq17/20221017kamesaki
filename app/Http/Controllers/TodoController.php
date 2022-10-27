<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use App\Http\Requests\TodoRequest;
use Validator;

class TodoController extends Controller
{
    public function post(TodoRequest $request)
    {
        return redirect('/');
    }

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

    public function update(Request $request)
    {
        Validator::make($request->all(), [
            'content' => 'required',
        ])->validate();
        Todo::where('id', $request->id)->update(['content' => $request->content]);
        return redirect('/');
    }

    public function remove(Request $request)
    {
        Todo::where('id', $request->id)->delete();
        return redirect('/');
    }
}
