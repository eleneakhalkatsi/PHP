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
</head>
<body>
	<table>
		<tr>
			<th>First Name</th>
			<th>Second Name</th>
			<th>Address</th>
			<th>Bio</th>
			<th>Date Of Birth</th>
		</tr>
		<tr>
			@foreach ($newdata as $data)
				<td>{{ $text }}</td>
				<td>{{ $text }}</td>
				<td>{{ $text }}</td>
				<td>{{ $textarea }}</td>
				<td>{{ $data }}</td>
			@endforeach
		</tr>
	</table>
</body>
</html>