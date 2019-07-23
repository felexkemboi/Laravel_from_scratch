

@extends('layout')

@section('content')
   <h1 class="title">Create a new Project</h1>
  <form method="POST" action="/projects" style="margin-bottom: 1em">
    @csrf
    <div>
      <input type="text" class="input" name="title" placeholder=" Project Title" required >
    </div>
    &nbsp &nbsp
    <div>
        <textarea name="description" class="textarea" placeholder="Project Description" required></textarea>
    </div>
    &nbsp &nbsp
    <div class="control">
      <button type="submit">Add Project</button>
    </div>
  </form>

@endsection