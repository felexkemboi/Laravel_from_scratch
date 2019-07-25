<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use Illuminate\Filesystem\Filesystem;


class ProjectsController extends Controller
{

    public function __construct(){
        $this -> middleware('auth'); //$this -> middleware('auth') -> only([ 'store','update']); or $this -> middleware('auth') -> except([ 'store']);    
    }

    public function index()
    {
     	$projects = Project::where('owner_id',auth()->id())->get();

    	return view('projects.index',compact('projects'));
    } 


    public function create()
    {

    	return view('projects.create');
    } 

   public function store()
    {
    	/*
        Project::create(request() -> validate([
            'title' =>['required','min:3','max:255'],
            'description' =>['required','min:3','max:255']
        ]) */

        $attributes = request() -> validate([
            'title' =>['required','min:3','max:255'],
            'description' =>['required','min:3','max:255']
        ]);

        Project::create($attributes + ['owner_id' => auth() -> id()]);
        //);

    	return redirect('/projects');
    } 


    public function edit($id)
    {
    	$project = Project::find($id);

    	return view('projects.edit',compact('project')); 
    }
   
    public function show(Project $project)
    {
        //abort_if($project -> owner_id !== auth()->,403);
        $this -> authorize('update',$project);  //after registering the policy
        return view('projects.show',compact('project'));
    }


    public function update(Project $project)
    {
        $project -> update(request(['title','description']));
    	$project -> save();
    	return redirect('/projects');
    }


    public function destroy($id)
    {
        Project::find($id) -> delete();
        return redirect('/projects');
    }

}

