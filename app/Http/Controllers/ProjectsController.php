<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{

    //Route::get('/projects'  ;
    public function index()
    {
     	$projects = Project::all();

    	return view('projects.index',compact('projects'));
    } 


    //Route::get('/projects/create',
    public function create()
    {

    	return view('projects.create');
    } 


    //Route::post('/projects', 
   public function store()
    {
    	$project = new Project();
    	$project -> title = request("title");
    	$project -> description = request("description");
    	$project -> save();

    	return redirect('/projects');
    } 


    //Route::get('/projects/{project}/edit',
    public function edit($id)
    {
    	$project = Project::find($id);

    	return view('projects.edit',compact('project')); //,compact('projects')
    }
   



    //Route::get('/projects/{project}',
    public function show($id)
    {
        $project = Project::find($id);

        return view('projects.show',compact('project')); //,compact('projects')
    }


    //Route::get('/projects/{project}'
    public function update($id)
    {
    	$project = Project::find($id);

    	$project -> title = request('title');
    	$project -> description = request('description');
    	$project -> save();
    	return redirect('/projects');
        //dd('Hello');
    }


    public function destroy($id)
    {
        Project::find($id) -> delete();
        return redirect('/projects');
    }

}

