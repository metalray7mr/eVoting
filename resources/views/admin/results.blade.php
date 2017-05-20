<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible " content="IE=edge">
<meta name ="viewport" content="width=device-width, initial-scale=1">
	<title>Info</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script type="text/javascript">
	function makeActive(){
		return "active";
	}
</script>
</head>


<body>



<ul class="nav nav-tabs">
  <li role="presentation"><a href="/admin">Home</a></li>
  <li role="presentation" "><a href="/info">Info</a></li>
  <li role="presentation"><a href="/adminau">Authorize</a></li>
  <li role="presentation" class="active"><a href="#">View Results</a></li>
    <li role="presentation" align = "right"><a href="/logout">Logout</a></li>
</ul>

<!-- <h1>{{$vInfo->where('pvoted',2)->count()}}</h1> -->

<div class="container">
<h1></h1>	
</div>
<div class="container"></div>
<div class="container">
<table class="table">
	<thead class="thead-default">
	<tr>
	<th>Party I.D</th>
	<th>Party Name</th>
	<th>Votes Achieved</th>
	</tr>
	</thead>
	<tbody>
	@foreach($parties as $party)
	<tr>
	<td>{{$party->id}}</td>
	<td>{{$party->pname}}</td>
	<td>{{$vInfo->where('pvoted',$party->id)->count()}}</td>
	</tr>
	@endforeach
	</tbody>
	
</table>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

</body>
</html>