@extends('layout')


 
@section('content')
    <h1 class="title">{{ $project -> title }}</h1>
    <div class="content">{{ $project -> description }} </div>
    <button><p><a href="/projects/{{ $project->id }}/edit">Edit</a></p></button> 
    <button><p><a href="/projects">Home</a></p></button>

    @if ($project -> tasks -> count())
      <div>
        @foreach($project-> tasks as $task)
        <div>
          <form method="POST" action="/tasks/{{  $task -> id  }}">

            @method('PATCH')
            @csrf

            <label class="checkbox" {{ $task ->completed? 'is-completed': '' }}for="completed">
              <input type="checkbox" name="completed" onChange="this.form.submit()" {{ $task-> completed ? 'checked' : ' '}}> <!-- -->
              {{ $task -> description }}
            </label>
          </form>
        </div>
        @endforeach
      </div>
    @endif
@endsection

