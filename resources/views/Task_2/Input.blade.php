<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<form action="{{route("secondpage")}}" method="POST" id="forma">
		@csrf
		<input type="text" name="name" placeholder="Your name">	
		<input type="text" name="surname" placeholder="Your surname">	
		<textarea name="add" placeholder="Your address"></textarea>
		<textarea name="info" placeholder="Your information"></textarea> 
		<input type="date" name="dateofbirth">
		<button id="submit">submit</button>
	</form>
</body>
</html>