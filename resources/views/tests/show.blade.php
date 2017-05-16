<!DOCTYPE html>
<html>
<head>
	<title>Show</title>
</head>
<body>
<h1>Details</h1>
<table border="1">
	<tr>
		
			<th>ID</th>
			<th>TASK</th>
			<th>STATUS</th>
			<th>Timestamp</th>
		
	</tr>
	<tr>
		<td>{{$test->id}}</td>
		<td>{{$test->task}}</td>
		<td>{{$test->completed}}</td>
		<td>{{$test->created_at}}</td>
	</tr>
</table>
</body>
</html>