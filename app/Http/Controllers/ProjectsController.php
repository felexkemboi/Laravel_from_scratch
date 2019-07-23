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


    public function create()
    {

    	return view('projects.create');
    } 

    //after the user submits the form 
   public function store()
    {
    	Project::create(request(['title','description']));
    	return redirect('/projects');
    } 


    public function edit($id)
    {
    	$project = Project::find($id);

    	return view('projects.edit',compact('project')); //,compact('projects')
    }
   
    public function show(Project $project)
    {

        return view('projects.show',compact('project'));
    }


    //Route::get('/projects/{project}'
    public function update(Project $project)
    {
    	//$project = Project::find($id);
        $project -> update(request(['title','description']));
    	/*$project -> title = request('title');
    	$project -> description = request('description');*/
    	$project -> save();
    	return redirect('/projects');
    }


    public function destroy($id)
    {
        Project::find($id) -> delete();
        return redirect('/projects');
    }

}

