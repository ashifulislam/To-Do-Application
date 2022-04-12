<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToDoController extends Controller
{
    public function toDoView()
    {
        return view('to_do_view');
    }
   public function create_tasks()
   {
       $tasks = new Task();
       $tasks->name = input('name');
       $tasks->save();
   }
}
