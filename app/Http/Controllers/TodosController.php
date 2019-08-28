<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index(){

        $todos = Todo::all();

        return view('todos.index', compact('todos'));
    
    }

    public function show($todo){

        $todo  = Todo::find($todo);
        return view('todos.show', compact('todo'));
    }
}
