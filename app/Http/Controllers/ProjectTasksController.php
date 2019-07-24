<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Project;




class ProjectTasksController extends Controller
{


    public function update( Task $task)
    {
       $task -> complete(request()-> has('completed'));
       //$method = request()->has('completed') ? 'complete' : 'incomplete';
       return back();
    }


     public function store(Project $project)
    {
       //$project -> addTask(request('description'));
       $attributes =  request() -> validate([ 'description' => 'required' ]);
       $project -> addTask($attributes);

       return back();
    }


}
