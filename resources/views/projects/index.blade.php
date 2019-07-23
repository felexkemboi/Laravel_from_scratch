<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <p>Projects</p>
 <ol>
 	@foreach ($projects as $project )
 		<li>
 			<a href="/projects/{{ $project->id }}" >{{ $project->title }}</a>
 		</li>
 	@endforeach
 </ol>
</body>
</html>