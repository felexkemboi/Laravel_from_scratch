<!DOCTYPE html>
<html>
<head>
	<title> Create a new Project </title>
</head>
<body>
  <form method="POST" action="/projects">

  	{{ csrf_field() }}
  	
  	<div>
  		<input type="text" name="title" placeholder="Project title">
  	</div>
  	<div>
  		<textarea name="description" placeholder="Project description"></textarea>
  	</div>
  	<div>
  		<button type="submit">Add a project</button>
  	</div>
  </form>
</body>
</html>