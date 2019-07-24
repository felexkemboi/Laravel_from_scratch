
@extends('layout')


 
@section('content')
  <div style="margin-bottom: 1em;">
    <h6>Home</h6>
  </div>
  <div>
  	<ul>
 	@foreach ($projects as $project )
 		<li>
 			<a href="/projects/{{ $project->id }}" >{{ $project->title }}</a>
 		</li>
 	@endforeach
 </ul>
  </div>
  
@endsection
