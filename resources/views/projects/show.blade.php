@extends('layout')


 
@section('content')
    <h1 class="title">{{ $project -> title }}</h1>
    <div class="content">{{ $project -> description }} </div>
    <button><p><a href="/projects/{{ $project->id }}/edit">Edit</a></p></button> 
    <button><p><a href="/projects">Home</a></p></button>
@endsection

