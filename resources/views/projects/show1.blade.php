@extends('layout')


 
@section('content')
    <!--<h1 class="title">{{ $project -> title }}</h1>
    <div class="content">{{ $project -> description }} </div>
    <button><p><a href="/projects/{{ $project->id }}/edit">Edit</a></p></button> 
    <button><p><a href="/projects">Home</a></p></button> -->

    <!--<p> this is just cool for this page </p>-->


    <!--
    @if ($project -> tasks -> count())
        <div>
      	    @foreach ($project ->tasks  as task)
      	        <div>
      	        	<form>
      	        		<label class="checkbox" for="completed">
      	        			<input type="checkbox" name="completed">
      	        			{{ $task -> description }}
      	        		</label>
      	        	</form>
      	        <li>
      	        	{{ $task -> description }}
      	        </li>
      	        </div>
      		@endforeach
        </div>
    @endif 
    <p>jhhghgbghyybthy</p> -->
@endsection

