<!DOCTYPE html>
<html>
<head>
	<title>NewFile</title>
</head>
<body>
<h1>List of Items</h1>


<table border="1">

<tr>
	<th>User I.D.</th>
	<th>Name</th>
	<th>Voter I.D.</th>
	<th>D.O.B</th>
</tr>
@foreach ($info as $inf)

<!--<li>
<a href="/info/{{$inf->id}}">
 {{$inf->name}}
 </a>
 </li>
//-->
	
	<tr>
		<td>
		<a href="/info/{{$inf->id}}">
		{{$inf->id}}
		</a>
		</td>
		<td>{{$inf->name}}</td>
		<td>{{$inf->voterid}}</td>
		<td>{{$inf->DOB}}</td>
	</tr>



@endforeach

</table>

</body>
</html>