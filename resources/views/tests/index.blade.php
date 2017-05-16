<!DOCTYPE html>
<html>
<head>
	<title>View</title>
</head>
<body>

<ul>
@foreach($tests as $test)
<li>{{$test->task}}</li>
@endforeach
</ul>
</body>
</html>