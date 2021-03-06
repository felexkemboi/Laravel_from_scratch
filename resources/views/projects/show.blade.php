@extends('layout')


 
@section('content')
  <div style="margin-bottom: 1em;">
    <h1 class="title">{{ $project -> title }}</h1>
    <div class="content">{{ $project -> description }} </div>
    <button><p><a href="/projects/{{ $project->id }}/edit">Edit</a></p></button> 
    <button><p><a href="/projects">Home</a></p></button>
  </div>

    @if ($project -> tasks -> count())
      <div class="box">
        @foreach($project-> tasks as $task)
        <div>
          <form method="POST" action="/tasks/{{  $task -> id  }}" >

            @method('PATCH')
            @csrf

          <label class="checkbox {{ $task->completed ? 'is-completed': '' }}" for="completed">
            <input type="checkbox" name="completed" onChange="this.form.submit()" {{ $task->completed ? 'checked' : ''}}>
              {{ $task -> description }}
          </label>
          </form>
        </div>
        @endforeach
      </div>
    @endif

    <!--add a new task for this project-->
    <form  action="/projects/{{ $project-> id }}/tasks" method="POST"   class="box" >

      @csrf

      <div class="field">
        <label class="label" for="description">New Task</label>
        <div class="control">
          <input type="text" class="input" name="description" placeholder="New Task" required>
        </div>
      </div>
      
      <div class="field">
        <div class="control">
          <button type="submit" class="button is-link">Add Task</button>
        </div>
      </div>

    </form>
@endsection

