

@extends('layout')

@section('content')
   <h1 class="title">Create a new Project</h1>
  <form method="POST" action="/projects" style="margin-bottom: 1em">
    @csrf
    <div class="field">
      <label class="label" for="title">Title</label>
      <div class="control">
        <input type="text" class="input {{ $errors -> has('title') ? 'is-danger' : ''}}" name="title" placeholder=" Project Title" value= "{{ old('title')}}" required>
      </div>
    </div>
     &nbsp &nbsp
    <div class="field">
      <label class="label" for="title">Project Description</label>
      <div class="control">
        <textarea name="description" class="textarea {{ $errors -> has('title') ? 'is-danger' : ''}}" placeholder="Project Description" required>{{ old('description')}}</textarea>
      </div>
    </div>
    &nbsp &nbsp
    <div class="control">
      <button type="submit">Add Project</button>
    </div>
    
    &nbsp &nbsp

    @if ($errors -> any())
      <div class="notification is-danger">
        <ul>
          @foreach ($errors -> all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif 

  </form>

@endsection