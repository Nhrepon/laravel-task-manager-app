<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\task;


class TaskController extends Controller
{
    function index(){
        //return task::all();
        //return task::limit(2) -> get();
        //return task::where('status', 'completed') -> get();
        //return task::where('status', 'completed') -> count();
        //return task::find(3);
        //return task::findOrFail(13);
        return task::orderBy('id', 'desc') -> get();
    }





    function doSomething(){
        task::create([
            /* 'title' => 'This is demo title ... ',
            'description' => 'This is demo description ... ',
            'due_date' => '2025-01-01' */
            'title' => fake()->sentence(10),
            'description' => fake()->sentence(20),
            'due_date' => now()->addDays(rand( 1, 10 ))
        ]);
        return 'task created';
    }


    function update(){
        task::find(10)->update([
            'status' => 'completed'
        ]);
        return 'task updated';
    }

    function show(Request $request, task $task){
        //return task::find($id);

        return $task;
    }
}
