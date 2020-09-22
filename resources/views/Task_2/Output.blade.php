<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table,td,td,th{
			border:solid 1px black;
			padding: 5px;
			border-collapse: collapse;
			}

		
	</style>
	<link rel="stylesheet" href="test.css">
</head>
<body>
	<table>
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Address</th>
			<th>About</th>
			<th>Date Of Birth</th>
		</tr>
		<tr>
			@foreach ($newdata as $text)
				<td>{{ $text["name"] }}</td>
				<td>{{ $text["surname"] }}</td>
				<td>{{ $text["add"] }}</td>
				<td>{{ $text["info"] }}</td>
				<td>{{ $text["dateofbirth"] }}</td>

			@endforeach
		</tr>
	</table>
</body>
</html>
