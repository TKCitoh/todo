<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    

    public function welcome()
    {
        $todos = Todo::all();

        return view('welcome', compact('todos'));
        // return view('welcome', ['todos' => $todos]); //compact関数を使わない書き方
    }

    public function store(Request $request) //データベースにデータを挿入する処理
    {
        $todo = new Todo(); 
        $todo->text = $request->text; 
        $todo->save();

        return redirect()->route('welcome'); // welcome.blade.phpへリダイレクトさせる。

    }
}
